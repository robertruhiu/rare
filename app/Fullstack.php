<?php

namespace App;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\Model;

class Fullstack extends Model
{
    //

    protected $fillable = [
        'name','description','type','level','timeassessment','image1','requirement1','requirement2','requirement3','requirement4',
        'requirement5','requirement6','numberapplicant'
    ];

//    public function users()
//    {
//        return $this->belongsToMany('App\User');
//    }


    public function typeassessment(){

        return $this->hasOne('App\Typeassessment');
    }

    public function users()
    {
        return $this->belongsToMany(user::class)->withPivot('created_at', 'updated_at', 'id', 'user_id');
    }

    public function user(){

        return $this->hasOne('App\User');
    }
}
