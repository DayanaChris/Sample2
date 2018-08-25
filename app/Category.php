<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
// use Illuminate\Foundation\Auth\User as Authenticatable;

class Category extends Model
{
    //
    //table name
  protected $table= 'categorys';
  //primary key
  public $primaryKey = 'category_id';
  // //Timestamps
  // public $timestamps= true;
  public $timestamps = false;



  // tutotial 10

 

  public function questionnaire(){
      return $this->hasMany('App\Questionnaire');
  }




}
//
// $overviewArray = DB::table('instruments')
// ->leftJoin('financials', 'instruments.id', '=', inancials.instruments_id')
// ->whereIn('financials.id', function($query){
// $query->select(DB::raw('MAX(financials.id)'))->
// from('financials')->
// groupBy('financials.instruments_id');})
// ->orderBy('instruments.id')
// ->get()
// ->toArray();
