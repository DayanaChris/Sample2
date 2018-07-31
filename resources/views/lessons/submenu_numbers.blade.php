@extends('layouts.lessons')

@section('content')

<body class="learn_numbers run-animation">
        @include('inc.messages')
        @yield('content')

        <a href="/main_menu "> <img class="zoom  container float-left card-img-top img-fluid   " style=" width: 15%; 
            padding: 10px;
            margin-top: 0px;
            margin-bottom: 20px;
            border: 0; 
            background: transparent; " src="SPEDEMY/Lessons/Alphabet/left.png"   /></a>
          
    
              
    <div  id="logo" class=" container " style=" margin-top: 0%;margin-bottom: 0%; " >
            <div class="container">
                <br>
                 <img  class="container logoanimation  pad log"  src="SPEDEMY/sub_menu/logo_numbers.png"   > 
                 <div class="row">
                        <div class="col-sm-6   "><a href="/lesson_numbers   "> <img class="card-img-top img-fluid zoom btn center"   src="SPEDEMY/sub_menu/btn_lesson.png" alt="Card image cap"></a> </div>
                        <div class="col-sm-6  " ><a href="/ "><img class="card-img-top img-fluid zoom btn center"   src="SPEDEMY/sub_menu/btn_quiz.png" alt="Card image cap"></a> </div>
                </div>
            </div>      
    </div>  



@endsection
 
                               
