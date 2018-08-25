<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Questionnaire extends Model
{
    //
    //table name
  protected $table= 'questionnaires';
  //primary key
  public $primaryKey = 'questionnaire_id';
  // //Timestamps
  // public $timestamps= true;
  public $timestamps = false;



  // tutotial 10

  public function user(){
      return $this-> belongsTo('App\User');
  }

  // function category() {
  //       return $this->hasMany('Category', 'category_id');
  //   }

  public function category(){
      return $this-> hasOne('App\Category');
  }

  public function level(){
      return $this-> hasOne('App\Level');
  }
 

  public function result(){
      return $this-> hasMany('App\result');
  }
}
