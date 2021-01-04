<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    //

    protected $guarded = [];

    public function User()
    {
        return $this->hasOne('App\User' , 'id' , 'user_id');
    }


    public function Advisor()
    {
        return $this->hasOne('App\Models\Advisors' , 'id' , 'advisor_id');
    }



    public function Subject()
    {
        return $this->hasOne('App\Models\Subject' , 'id' , 'subject_id');
    }



    public function UserImage()
    {
         $user_id_image =  $this->hasOne('\App\Models\Image' , 'item_id' , 'user_id');
         return $user_id_image->where('type' , 'profile_user');
    }
}
