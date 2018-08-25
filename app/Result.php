<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //
    protected $table= 'results';
    //primary key
    public $primaryKey = 'result_id';
    // //Timestamps
    // public $timestamps= true;
    public $timestamps = false;



    // tutotial 10

    public function user(){
        return $this-> hasMany('App\User');
    }

    public function questionnaire(){
        return $this-> hasMany('App\questionnaire');
    }

}
