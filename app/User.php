<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Passport\HasApiTokens;
use App\Contact;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [''];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function contacts()
    {
        return $this->hasMany(Contact::class);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    // public function getRouteKeyName(){
    //     return 'uuid';
    // }
    public function wards()
    {
        return $this->belongsTo(Ward::class, 'ward_id', 'id');
    }

    public static function send_sms($mobile_no,$template){
        $key = "18198ec07073ff26eef2f87370837be1";
        $route = 7;
        $sender = "SRIHER";
        $number = $mobile_no;
        $sms = $template;
        $templateid = "1207161822898481553";
        $url = "http://msg.lionsms.com/api/smsapi?";
        $message = urlencode($sms);
        $ch = curl_init();
        if (!$ch){die("Couldn't initialize a cURL handle");}
        $ret1 = curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_POSTFIELDS, "key=$key&route=$route&sender=$sender&number=$number&sms=$message&templateid=$templateid");
        $curlresponse = curl_exec($ch);
        curl_close($ch);
        return true;
    }
}
