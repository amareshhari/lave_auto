<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\EgmoreInfo;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        if (Auth::user()) {
            return redirect('/dashboard');
        }
        return view('signin');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->route('user.index');
        }
    }

    public function otp_verify(User $user, Request $request)
    {
        if (Auth::user()) {
            return redirect('/dashboard');
        }
        if ($request->isMethod('post')) {
            $user = User::where('primary_mobile_number', $request->mobile_number)->where('otp', $request->otp)->first();
            if ($user) {
                Auth::login($user);
                return redirect('/dashboard');
            } else {
                return redirect()->back()->with('error', 'Invalid data');
            }
        }
        return view('otp_verify', compact('user'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    public function privacyPolicy(){
        return view('privacy_policy');
    }

    // public function import(Request $request){
    //     \DB::table('egmore_infos')->truncate();
    //     $file = 'egmore_data.csv';
    //     $arrResult  = array();
    //     $handle     = fopen($file, "r");
    //     if(empty($handle) === false) {
    //         while(($data = fgetcsv($handle, 1000, ",")) !== FALSE){
    //             $arrResult[] = $data;
    //         }
    //         fclose($handle);
    //     }
    //     if(isset($arrResult) && count($arrResult)){
    //         foreach($arrResult as $arr){
    //             $egmore_info = new EgmoreInfo();
    //             $egmore_info->category_id = !empty($arr[0])?$arr[0]:'';
    //             $egmore_info->name = !empty($arr[1])?$arr[1]:'';
    //             $egmore_info->name_tamil = !empty($arr[2])?$arr[2]:'';
    //             $egmore_info->address = !empty($arr[3])?$arr[3]:'';
    //             $egmore_info->address_tamil = !empty($arr[4])?$arr[4]:'';
    //             $egmore_info->phone = !empty($arr[5])?$arr[5]:'';
    //             $egmore_info->map_upload = !empty($arr[6])?$arr[6]:'';
    //             $egmore_info->status = 1;
    //             $egmore_info->save();
    //         }
    //     }
    //     return view('import');
    // }
}
