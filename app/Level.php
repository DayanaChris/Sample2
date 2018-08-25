<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    //
    //table name
  protected $table= 'levels';
  //primary key
  public $primaryKey = 'level_id';
  // //Timestamps
  // public $timestamps= true;
  public $timestamps = false;



  // tutotial 10

 

  public function questionnaire(){
      return $this->hasMany('App\Questionnaire');
  }
}
