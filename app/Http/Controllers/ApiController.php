<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Ward;
use App\Banner;
use App\Complaint;
use App\Contact;
use App\Calendar;
use App\Category;
use App\EgmoreInfo;
use App\Blog;
use App\Event;
use App\GovernmentLink;
use App\MediaSportlight;

class ApiController extends Controller
{
    public function login(Request $request){
        $return_arr = array();
        try{
            if($request->mobile){
                if($request->mobile == '7010025007'){
                    $otp = '123456';
                }else{
                    $min = pow(10, 6 - 1);
                    $max = pow(10, 6) - 1;
                    $otp = mt_rand($min, $max);
                    // $template = "One Time Password(OTP): $otp Kindly Provide OTP for Mobile No Confirmation";
                    // User::send_sms($request->mobile,$template);
                }
                $user = User::where('mobile',$request->mobile)->first();
                if($user && $user->status){
                    $user->otp = $otp;
                    $user->save();
                    $return_arr['success'] = 1;
                    $return_arr['msg'] = 'User Found';
                    $return_arr['otp'] = $otp;
                    $return_arr['user'] = $user;
                }else{
                    $return_arr['success'] = 1;
                    $return_arr['msg'] = 'User not Found';
                    $return_arr['token'] = '';
                    $return_arr['otp'] = $otp;
                }
            }else{
                $return_arr['success'] = 0;
                $return_arr['msg'] = 'Please enter the valid input';
                $return_arr['token'] = '';
                $return_arr['otp'] = '';
            }
        }catch(\Exception $e){
            $return_arr['success'] = 0;
            $return_arr['msg'] = 'Invalid!';
            $return_arr['token'] = '';
            $return_arr['otp'] = '';
            $return_arr['errors'] = $e->getMessage();
        }
        return response()->json($return_arr);
    }

    public function otp_verify(Request $request){
        $return_arr = array();
        try{
            if($request->mobile && $request->otp){
                $user = User::where('mobile',$request->mobile)->where('otp',$request->otp)->first();
                if($user){
                    Auth::login($user);
                    $token = auth()->user()->createToken('API Token')->accessToken;
                    $return_arr['success'] = 1;
                    $return_arr['msg'] = 'Successfully logged in';
                    $return_arr['token'] = $token;
                    $return_arr['user'] = $user;
                }else{
                    $return_arr['success'] = 0;
                    $return_arr['msg'] = 'Invalid OTP';
                    $return_arr['token'] = '';
                    $return_arr['user'] = array();
                }
            }else{
                $return_arr['success'] = 0;
                $return_arr['msg'] = 'Please enter the valid input';
                $return_arr['otp'] = '';
            }
        }catch(\Exception $e){
            $return_arr['success'] = 0;
            $return_arr['msg'] = 'Invalid!';
            $return_arr['otp'] = '';
            $return_arr['errors'] = $e->getMessage();
        }
        return response()->json($return_arr);
    }

    public function register(Request $request){
        try{
            if($request->name && $request->gender && $request->mobile && $request->email){
                $user = User::where('mobile',$request->mobile)->first();
                if(!$user){
                    $user = new User();
                }
                $user->name = $request->name;
                $user->gender = $request->gender;
                $user->mobile = $request->mobile;
                $user->email = $request->email;
                $user->profile_image = '';
                $user->otp = 0;
                $user->otp_verified = 0;
                $user->status = 1;
                if($user->save()){
                    Auth::login($user);
                    $token = auth()->user()->createToken('API Token')->accessToken;
                    $return_arr['success'] = 1;
                    $return_arr['msg'] = 'User data saved successfully!';
                    $return_arr['token'] = $token;
                    $return_arr['user'] = $user;
                }else{
                    $return_arr['success'] = 0;
                    $return_arr['msg'] = 'User not Found';
                    $return_arr['token'] = '';
                    $return_arr['user'] = array();
                }
            }else{
                $return_arr['success'] = 0;
                $return_arr['msg'] = 'Please enter the valid input';
                $return_arr['token'] = '';
                $return_arr['user'] = array();
            }
        }catch(\Exception $e){
            $return_arr['success'] = 0;
            $return_arr['msg'] = 'Invalid!';
            $return_arr['token'] = '';
            $return_arr['user'] = array();
            $return_arr['errors'] = $e->getMessage();
        }
        return response()->json($return_arr);
    }

    public function banners(){
        $return_arr = array();
        try{
            $banners = Banner::where('status',1)->orderBy('id','DESC')->get();
            if(isset($banners) && count($banners) > 0){
                foreach($banners as $banner){
                    if($banner->image){
                        $banner->image = \URL::to('/').'/images/banners/'.$banner->image;
                    }else{
                        $banner->image = '';
                    }
                }
                $return_arr['success'] = 1;
                $return_arr['msg'] = 'Banners Found';
                $return_arr['banners'] = $banners;
            }else{
                $return_arr['success'] = 0;
                $return_arr['msg'] = 'Banners not Found';
                $return_arr['banners'] = array();
            }
        }catch(\Exception $e){
            $return_arr['success'] = 0;
            $return_arr['msg'] = 'Banners not Found';
            $return_arr['banners'] = array();
            $return_arr['errors'] = $e->getMessage();
        }
        return response()->json($return_arr);
    }

    public function complaint(){
        $return_arr = array();
        try{
            $complaint = Complaint::where('status',1)->orderBy('id','DESC')->first();
            if($complaint){
                $return_arr['success'] = 1;
                $return_arr['msg'] = 'Complaints Found';
                $return_arr['complaint'] = $complaint;
            }else{
                $return_arr['success'] = 0;
                $return_arr['msg'] = 'Complaints not Found';
                $return_arr['complaint'] = array();
            }
        }catch(\Exception $e){
            $return_arr['success'] = 0;
            $return_arr['msg'] = 'Complaints not Found';
            $return_arr['complaint'] = array();
            $return_arr['errors'] = $e->getMessage();
        }
        return response()->json($return_arr);
    }

    public function contact(Request $request){
        $return_arr = array();
        try{
            if($request->message){
                $contact = new Contact();
                $contact->user_id = Auth::user()->id;
                $contact->message = $request->message;
                $contact->status = 1;
                if($contact->save()){
                    $return_arr['success'] = 1;
                    $return_arr['msg'] = 'Message has been sent successfully.';
                }else{
                    $return_arr['success'] = 0;
                    $return_arr['msg'] = 'We have encountered some problem. Please try again.';
                }
            }else{
                $return_arr['success'] = 0;
                $return_arr['msg'] = 'Please enter valid input.';
            }
        }catch(\Exception $e){
            $return_arr['success'] = 0;
            $return_arr['msg'] = 'Invalid!';
            $return_arr['errors'] = $e->getMessage();
        }
        return response()->json($return_arr);
    }

    public function monthCalendars(Request $request){
        $return_arr = array();
        try{
            if($request->month){
                $calendars = Calendar::whereMonth('calendar_date', '=', $request->month)->groupBy('calendar_date')->pluck('calendar_date');
                if(isset($calendars) && count($calendars) > 0){
                    $return_arr['success'] = 1;
                    $return_arr['msg'] = 'Date Found';
                    $return_arr['calendar_dates'] = $calendars;
                }else{
                    $return_arr['success'] = 0;
                    $return_arr['msg'] = 'Calendar not Found';
                    $return_arr['calendar_dates'] = array();
                }
            }else{
                $return_arr['success'] = 0;
                $return_arr['msg'] = 'Please enter valid input.';
                $return_arr['calendar_dates'] = array();
            }
        }catch(\Exception $e){
            $return_arr['success'] = 0;
            $return_arr['msg'] = 'Calendar not Found';
            $return_arr['calendar_dates'] = array();
            $return_arr['errors'] = $e->getMessage();
        }
        return response()->json($return_arr);
    }

    public function calendars(Request $request){
        $return_arr = array();
        try{
            if($request->date){
                $calendars = Calendar::where('status',1)->where('calendar_date',date('Y-m-d',strtotime($request->date)))->orderBy('id','DESC')->get();
                if(isset($calendars) && count($calendars) > 0){
                    $return_arr['success'] = 1;
                    $return_arr['msg'] = 'Calendar Found';
                    $return_arr['calendars'] = $calendars;
                }else{
                    $return_arr['success'] = 0;
                    $return_arr['msg'] = 'Calendar not Found';
                    $return_arr['calendars'] = array();
                }
            }else{
                $return_arr['success'] = 0;
                $return_arr['msg'] = 'Please enter valid input.';
                $return_arr['calendars'] = array();
            }
        }catch(\Exception $e){
            $return_arr['success'] = 0;
            $return_arr['msg'] = 'Calendar not Found';
            $return_arr['calendars'] = array();
            $return_arr['errors'] = $e->getMessage();
        }
        return response()->json($return_arr);
    }

    public function categories(Request $request){
        $return_arr = array();
        try{
            $page = !empty($request->page)?$request->page:0;
            $limit = !empty($request->limit)?$request->limit:20;
            $offset = $page * $limit;
            $categories = Category::where('status',1)->offset($offset)->take($limit)->orderBy('id','DESC')->get();
            if(isset($categories) && count($categories) > 0){
                foreach($categories as $category){
                    if($category->icon){
                        $category->icon = \URL::to('/').'/images/categories/'.$category->icon;
                    }else{
                        $category->icon = '';
                    }
                }
                $return_arr['success'] = 1;
                $return_arr['msg'] = 'Categories Found';
                $return_arr['categories'] = $categories;
            }else{
                $return_arr['success'] = 0;
                $return_arr['msg'] = 'Categories not Found';
                $return_arr['categories'] = array();
            }
        }catch(\Exception $e){
            $return_arr['success'] = 0;
            $return_arr['msg'] = 'Categories not Found';
            $return_arr['categories'] = array();
            $return_arr['errors'] = $e->getMessage();
        }
        return response()->json($return_arr);
    }

    public function egmoreInfos(Request $request){
        $return_arr = array();
        try{
            if($request->category_id){
                $page = !empty($request->page)?$request->page:0;
                $limit = !empty($request->limit)?$request->limit:10;
                $offset = $page * $limit;
                $egmoreInfos = EgmoreInfo::where('category_id',$request->category_id)->where('status',1)->offset($offset)->take($limit)->orderBy('id','DESC')->get();
                if(isset($egmoreInfos) && count($egmoreInfos) > 0){
                    $return_arr['success'] = 1;
                    $return_arr['msg'] = 'Data Found';
                    $return_arr['egmore_infos'] = $egmoreInfos;
                }else{
                    $return_arr['success'] = 0;
                    $return_arr['msg'] = 'Data not Found';
                    $return_arr['egmore_infos'] = array();
                }
            }else{
                $return_arr['success'] = 0;
                $return_arr['msg'] = 'Please enter valid input.';
                $return_arr['egmore_infos'] = array();
            }
        }catch(\Exception $e){
            $return_arr['success'] = 0;
            $return_arr['msg'] = 'Data not Found';
            $return_arr['egmore_infos'] = array();
            $return_arr['errors'] = $e->getMessage();
        }
        return response()->json($return_arr);
    }

    public function blogs(Request $request){
        $return_arr = array();
        try{
            $blogs = Blog::where('status',1)->orderBy('id','DESC')->get();
            if(isset($blogs) && count($blogs) > 0){
                foreach($blogs as $blog){
                    if($blog->primary_image){
                        $blog->primary_image = \URL::to('/').'/images/blogs/'.$blog->primary_image;
                    }else{
                        $blog->primary_image = '';
                    }
                    if($blog->secondary_image){
                        $blog->secondary_image = \URL::to('/').'/images/blogs/'.$blog->secondary_image;
                    }else{
                        $blog->secondary_image = '';
                    }
                }
                $return_arr['success'] = 1;
                $return_arr['msg'] = 'Blogs Found';
                $return_arr['blogs'] = $blogs;
            }else{
                $return_arr['success'] = 0;
                $return_arr['msg'] = 'Blogs not Found';
                $return_arr['blogs'] = array();
            }
        }catch(\Exception $e){
            $return_arr['success'] = 0;
            $return_arr['msg'] = 'Blogs not Found';
            $return_arr['blogs'] = array();
            $return_arr['errors'] = $e->getMessage();
        }
        return response()->json($return_arr);
    }

    public function events(Request $request){
        $return_arr = array();
        try{
            $page = !empty($request->page)?$request->page:0;
            $limit = !empty($request->limit)?$request->limit:10;
            $offset = $page * $limit;
            $events = Event::where('status',1)->offset($offset)->take($limit)->orderBy('id','DESC')->get();
            if(isset($events) && count($events) > 0){
                $return_arr['success'] = 1;
                $return_arr['msg'] = 'Events Found';
                $return_arr['events'] = $events;
            }else{
                $return_arr['success'] = 0;
                $return_arr['msg'] = 'Events not Found';
                $return_arr['events'] = array();
            }
        }catch(\Exception $e){
            $return_arr['success'] = 0;
            $return_arr['msg'] = 'Events not Found';
            $return_arr['events'] = array();
            $return_arr['errors'] = $e->getMessage();
        }
        return response()->json($return_arr);
    }

    public function governmentLinks(Request $request){
        $return_arr = array();
        try{
            $page = !empty($request->page)?$request->page:0;
            $limit = !empty($request->limit)?$request->limit:10;
            $offset = $page * $limit;
            $governmentLinks = GovernmentLink::where('status',1)->offset($offset)->take($limit)->orderBy('id','DESC')->get();
            if(isset($governmentLinks) && count($governmentLinks) > 0){
                $return_arr['success'] = 1;
                $return_arr['msg'] = 'Links Found';
                $return_arr['government_links'] = $governmentLinks;
            }else{
                $return_arr['success'] = 0;
                $return_arr['msg'] = 'Links not Found';
                $return_arr['government_links'] = array();
            }
        }catch(\Exception $e){
            $return_arr['success'] = 0;
            $return_arr['msg'] = 'Links not Found';
            $return_arr['government_links'] = array();
            $return_arr['errors'] = $e->getMessage();
        }
        return response()->json($return_arr);
    }

    public function mediaSpotlight(Request $request){
        $return_arr = array();
        try{
            $page = !empty($request->page)?$request->page:0;
            $limit = !empty($request->limit)?$request->limit:10;
            $offset = $page * $limit;
            $mediaSpotlight = MediaSportlight::where('status',1)->offset($offset)->take($limit)->orderBy('id','DESC')->get();
            if(isset($mediaSpotlight) && count($mediaSpotlight) > 0){
                $return_arr['success'] = 1;
                $return_arr['msg'] = 'Data Found';
                $return_arr['media_spotlight'] = $mediaSpotlight;
            }else{
                $return_arr['success'] = 0;
                $return_arr['msg'] = 'Data not Found';
                $return_arr['media_spotlight'] = array();
            }
        }catch(\Exception $e){
            $return_arr['success'] = 0;
            $return_arr['msg'] = 'Data not Found';
            $return_arr['media_spotlight'] = array();
            $return_arr['errors'] = $e->getMessage();
        }
        return response()->json($return_arr);
    }
}
