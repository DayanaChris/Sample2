<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{


    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //pag wala naka log in, dili maka create ug post and ma direct sya sa login form
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index','about','contact', 'show']]);
    }

    //
    public function index(){
        $title = 'Welcome to SPEDEMY!';
        return view('pages.index') ->with('title', $title); }
    public function about(){
        $title = 'About us!';
        return view('pages.about')->with ('title', $title); }

    public function contact(){
        $title = 'Contact Us!';
        return view('pages.contact')->with ('title', $title);
    }

    public function main_menu(){
        $title = 'Main Menu!';
        return view('lessons.main_menu')->with ('title', $title);
    }

    public function submenu_alphabets(){
        $title = 'ALPHABETS!';
        return view('lessons.submenu_alphabets')->with ('title', $title);
    }
    public function submenu_colors(){
        $title = 'ALPHABETS!';
        return view('lessons.submenu_colors')->with ('title', $title);
    }
    public function submenu_shapes(){
        $title = 'ALPHABETS!';
        return view('lessons.submenu_shapes')->with ('title', $title);
    }
    public function submenu_numbers(){
        $title = 'ALPHABETS!';
        return view('lessons.submenu_numbers')->with ('title', $title);
    }
    public function submenu_actionwords(){
        $title = 'ALPHABETS!';
        return view('lessons.submenu_actionwords')->with ('title', $title);
    }
    public function submenu_expressions(){
        $title = 'ALPHABETS!';
        return view('lessons.submenu_expressions')->with ('title', $title);
    }
    public function lesson_alphabets(){
        $title = 'ALPHABETS!';
        return view('lessons.lesson_alphabets')->with ('title', $title);
    }
    public function lesson_vowels(){
        $title = 'ALPHABETS!';
        return view('lessons.lesson_vowels')->with ('title', $title);
    }
    public function lesson_colors(){
        $title = 'ALPHABETS!';
        return view('lessons.lesson_colors')->with ('title', $title);
    }
    public function lesson_numbers(){
        $title = 'ALPHABETS!';
        return view('lessons.lesson_numbers')->with ('title', $title);
    }
    public function lesson_shapes(){
        $title = 'ALPHABETS!';
        return view('lessons.lesson_shapes')->with ('title', $title);
    }

    public function lesson_alphabetsA(){
        $title = 'ALPHABETS!';
        return view('lessons.lesson_alphabetsA')->with ('title', $title);
    }
    public function quiz_alphabetsA(){
        $title = 'ALPHABETS!';
        return view('lessons.quiz_alphabetsA')->with ('title', $title);
    }
    public function aaquiz(){
        $title = 'ALPHABETS!';
        return view('lessons.aaquiz')->with ('title', $title);
    }
    public function aafinal(){
        $title = 'ALPHABETS!';
        return view('lessons.aafinal')->with ('title', $title);
    }

    public function aaprocess(){
        $title = 'ALPHABETS!';
        return view('lessons.aaprocess')->with ('title', $title);
    }
    public function aaindex(){
        $title = 'ALPHABETS!';
        return view('lessons.aaindex')->with ('title', $title);
    }






    public function aaaa(){
        $title = 'ALPHABETS!';
        return view('lessons.aaaa')->with ('title', $title);
    }




    public function sample(){
        $title = 'SAMPLE!';
        return view('quiz.SAMPLE')->with ('title', $title);
    }
 

    public function aaaaNOT() {
        // The inputs variable contains all your form's inputs in the form of array...
        $inputs = request()->all();
        /* 
            $inputs = array(
                'title' => 'title_value',
                'meaning' => 'meaning_value'
            )
        */
        // Wheareas you can also get them by using 'get' method on request method like this
        $title = request()->get('title');
    }








    public function services(){
        $data= array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
   
        return view('pages.services')->with($data);
    }

}
