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


      public function manage(){
          $title = 'MANAGE!';
          return view('manage')->with ('title', $title);
      }

      public function category_menu(){
          $title = 'category_menu!';
          return view('category_menu')->with ('title', $title);
      }







  }
