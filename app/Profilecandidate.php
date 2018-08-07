<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profilecandidate extends Model
{
    //

    protected $fillable = [
        'candidate_id', 'mobile', 'address', 'linkedin',  'github','biography'
         
    ];



    public function candidate(){

        return $this->belongsTo('App\Candidate');
    }



}
