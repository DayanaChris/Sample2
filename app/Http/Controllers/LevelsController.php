<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Category;
use App\Level;
use App\Questionnaire;

use App\User;
use DB;


class LevelsController extends Controller
{

    public function __construct()
      {
          // $this->middleware('auth', ['except' => ['index', 'show']]);
      }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



     public function category_menu()
     {
       $levels = Questionnaire::selectRaw("count('questionnaire_id') as total, question_id")->
       with('question', 'question.choice1')->groupBy('question_id')->get();
       // paginate by 1 . 1 post per page.
       return view('category_menu');
     }


     public function dashboard()
     {
       $levels = Level::orderBy('level_id' )->paginate(10); // paginate by 1 . 1 post per page.
       return view('levels.dashboard')->with('levels', $levels);
     }
    public function index()
    {
        //
        $levels = Level::orderBy('level_id' )->paginate(10);
        return view('levels.index')->with('levels', $levels);
    }

    public function menu()
    {
      $levels = Level::orderBy('level_id' )->paginate(10);// paginate by 1 . 1 post per page.
      return view('level_menu')->with('levels', $levels);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      return view('levels.create');

        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

            //
            $this->validate($request, [
              'level_name' => 'required',
              'level_image' => 'image|nullable|max:1999'



          ]);

          //handle file upload
          if($request->hasFile('level_image')){
             //get filename with the extension
             $filenameWithExt= $request->file('level_image')->getClientOriginalName();
             //get just filename

             $filename= pathinfo($filenameWithExt, PATHINFO_FILENAME);
             //get just extension
             $extension = $request->file('level_image')-> getClientOriginalExtension();
             //filename to store
             $fileNameToStore = $filename.'.'.$extension;
             //upload the image
             $path = $request ->file('level_image')->storeAs('public/level_image', $fileNameToStore);

         }else{
           $fileNameToStore ='noimage.jpg';
         }



          //create post
          $level = new Level;
          $level->level_name = $request ->input('level_name');
          $level->level_image= $fileNameToStore;


          $level->save();

          return redirect('/levels')->with('success', 'level is Created');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $levels=  Level::find($id);
      return view('levels.show')->with('level', $levels);
    }



    public function showlevelid($id)
    {
        //
        $levels=  Level::find($id);
      return view('levels.show')->with('level', $levels);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $level= Level::find($id);


    //check for correct user
    if(auth()->user()->id !== $level->user_id){
        return redirect('/levels')->with('error', 'Unauthorized page');
    }
    return view('levels.edit')->with('level', $level);



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $this->validate($request, [
        'level_name' => 'required',
        'level_image' => 'image|nullable|max:1999'



    ]);

    //handle file upload
    if($request->hasFile('level_image')){
       //get filename with the extension
       $filenameWithExt= $request->file('level_image')->getClientOriginalName();
       //get just filename

       $filename= pathinfo($filenameWithExt, PATHINFO_FILENAME);
       //get just extension
       $extension = $request->file('level_image')-> getClientOriginalExtension();
       //filename to store
       $fileNameToStore = $filename.'.'.$extension;
       //upload the image
       $path = $request ->file('level_image')->storeAs('public/level_image', $fileNameToStore);

   }




    //create post
    $level =  Level::find($id);

    $level->level_name = $request ->input('level_name');
    if($request->hasFile('level_image')){
        $level->level_image=$fileNameToStore;
    }


    $level->save();

    return redirect('/levels')->with('success', 'level is Created');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      $level =  Level::find($id);

   if(auth()->user()->id !== $level->user_id){
       return redirect('/levels')->with('error', 'Unauthorized page');
   }

   if($level->level_image!='noimage.jpg'){
       //delete image
       Storage::delete('public/level_image/'.$level->level_image);


   }


   $level->delete();

   return redirect('/levels')->with('success', 'level deleted');

        //
    }
}
