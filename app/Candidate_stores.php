<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate_stores extends Model
{
    //
    protected $fillable = [
        'store_id','user_id','candidate_id','candidate_name','assessment_id','type','proglanguage','framelanguage','framecss','framehtml',
        'level','requirement1','requirement2','requirement2','requirement3','requirement4','requirement5','requirement6','image1','description','name','typeassessment','dateassessment','endassessment',
        'timeassessment','numberapplicant','validate','company'
    ];

    public function candidate(){

        return $this->belongsTo('App\Candidate');
    }

    public function store(){

        return $this->belongsTo('App\Store');
    }


}
