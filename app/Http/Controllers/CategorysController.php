<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

use App\Category;
use DB;
use App\User;

class CategorysController extends Controller
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

     public function level_menu()
     {
       // $categorys = Level::orderBy('level_name' )->paginate(10); // paginate by 1 . 1 post per page.
       return view('level_menu');
     }



     public function dashboard()
     {
       $categorys = Category::orderBy('category_name' )->paginate(10); // paginate by 1 . 1 post per page.
       return view('categorys.dashboard')->with('categorys', $categorys);
     }

    public function index()
    {
      $categorys = Category::orderBy('category_name' )->paginate(10); // paginate by 1 . 1 post per page.
      return view('categorys.index')->with('categorys', $categorys);
    }

    public function menu()
    {
      $categorys = Category::orderBy('category_name' )->paginate(10); // paginate by 1 . 1 post per page.
      return view('category_menu')->with('categorys', $categorys);
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categorys.create');
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
        $this->validate($request, [
          'category_name' => 'required',
          'category_image' => 'image|nullable|max:1999'

      ]);

      //handle file upload
      if($request->hasFile('category_image')){
         //get filename with the extension
         $filenameWithExt= $request->file('category_image')->getClientOriginalName();
         //get just filename

         $filename= pathinfo($filenameWithExt, PATHINFO_FILENAME);
         //get just extension
         $extension = $request->file('category_image')-> getClientOriginalExtension();
         //filename to store
         $fileNameToStore = $filename.'.'.$extension;
         //upload the image
         $path = $request ->file('category_image')->storeAs('public/category_image', $fileNameToStore);

     }else{
       $fileNameToStore ='noimage.jpg';
     }

      //create post
      $category = new Category;
      $category->category_name = $request ->input('category_name');
      // $category->user_id= auth()->user()->id;
      $category->category_image= $fileNameToStore;

      $category->save();

      return redirect('/categorys')->with('success', 'Category is Created');


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
        $categorys=  Category::find($id);
      return view('categorys.show')->with('category', $categorys);
    }


    // public function shows($id)
    // {
    //     //
    //     $category=  "SELECT * FROM `categorys`";
    //     return view('categorys.show')->with('category', $category);
    // }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $category= Category::find($id);


      //check for correct user
      if(auth()->user()->id !== $category->user_id){
          return redirect('/categorys')->with('error', 'Unauthorized page');
      }
      return view('categorys.edit')->with('category', $category);
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
        //
        $this->validate($request, [
          'category_name' => 'required',
          'category_image' => 'image|nullable|max:1999'


      ]);


       //handle file upload
       if($request->hasFile('category_image')){
          //get filename with the extension
          $filenameWithExt= $request->file('category_image')->getClientOriginalName();
          //get just filename

          $filename= pathinfo($filenameWithExt, PATHINFO_FILENAME);
          //get just extension
          $extension = $request->file('category_image')-> getClientOriginalExtension();
          //filename to store
          $fileNameToStore = $filename.'.'.$extension;
          //upload the image
          $path = $request ->file('category_image')->storeAs('public/category_image', $fileNameToStore);

      }


      //create post
      $category =  Category::find($id);

      $category->category_name = $request ->input('category_name');

      if($request->hasFile('category_image')){
          $category->category_image=$fileNameToStore;
      }

      $category->save();

      return redirect('/categorys')->with('success', 'Category is Created');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           //check for correct user
           $category =  Category::find($id);

        if(auth()->user()->id !== $category->user_id){
            return redirect('/categorys')->with('error', 'Unauthorized page');
        }

        if($category->category_image!='noimage.jpg'){
            //delete image
            Storage::delete('public/category_image/'.$category->category_image);


        }

        $category->delete();

        return redirect('/categorys')->with('success', 'Category deleted');


    }
}
