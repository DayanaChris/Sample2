
 <!DOCTYPE html>
 <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 <head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">
 
     <title>{{ config('app.name', 'Laravel') }}</title>
 
    
     <!-- Fonts -->
     <link rel="dns-prefetch" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
 
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link href="{{ asset('css/animate.css') }}" rel="stylesheet">

 
 
 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
 {{-- bootstrap --}}
 <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" rel="stylesheet"/>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style> 
   
            .btn{
                width: 15%;  
                margin-top: 0px;
                padding:10px;
                border: 0; 
                background: transparent; 
            }
             body {
                 font-family: "Lato", sans-serif;
                 background-image: url("SPEDEMY/sub_menu/background.jpg");
                 background-repeat: repeat;
                 font-weight: 100;
                 height: 100vh;
                 margin: 0;
             }
                .letter{
                    width:13%;  
                    padding-right: 0%;
           

                }
                .lettersmall{
                    width:12%;  
                    padding-right: 0%;
           

                }

           
        
           .back{
            width: 15%; 
            padding: 10px;
            margin-top: 0px;
            margin-bottom: 10px;
            border: 0; 
            background: transparent; 
            }
            .marg0{
                margin-top:2%;
                margin-left:12%;
            }
            .marg1{
                margin-left: 20%;
            }
            .margine2{
                margin-left: 15%;
            }
            .marg3{
                margin-left: 9%;
            }
            .marg4{
                margin-left: 0.5%;
            }
            /* .letter.small{
                width: 13%;
            } */


            /* hover */
            .zoom:hover {
                -ms-transform: scale(1.3); /* IE 9 */
                -webkit-transform: scale(1.3); /* Safari 3-8 */
                transform: scale(1.3); 
            }  
             @media screen and (max-width: 576px) {
 
                .btn{
                    width: 20%;
                }
                .letter,.lettersmall{
                    width: 30%;
                }
                .margine2{
                    margin-left:0%; 
                }
                .marg0,.marg1,.marg3,.marg4{
                    margin-left:0%; 
                }
               
                .back{ 
                margin-top: 0%;
                width:50%;  
                }
                .zoom:hover {
                -ms-transform: scale(1.1); /* IE 9 */
                -webkit-transform: scale(1.1); /* Safari 3-8 */
                transform: scale(1.1); 
                }  
            }
             @media screen and (max-width: 767px) {
 
                .btn{
                    width: 20%;
                }
                .letter,.lettersmall{
                    width: 30%;
                }
                .margine2{
                    margin-left:0%; 
                }
                .marg0,.marg1,.marg3,.marg4{
                    margin-left:0%; 
                }
                .back{ 
                margin-top: 0%;
                width:50%;  
                }
                .zoom:hover {
                -ms-transform: scale(1.1); /* IE 9 */
                -webkit-transform: scale(1.1); /* Safari 3-8 */
                transform: scale(1.1); 
                }   
            }
 </style>
 
 </head>
 
 
 <body class="run-animation">
     <div id="app"> 
         {{-- <main class="py-4"> --}}
 
             <div class="container">
                 @include('inc.messages')
                 @yield('content')
             </div>
         {{-- </main> --}}
     </div>


     <a href="/submenu_alphabets "> <img class="btn zoom  container float-left  card-img-top img-fluid    "  src="SPEDEMY/Lessons/Alphabet/left.png"   /></a>
      
        <a href="/lesson_vowels "> <img class="btn zoom  container float-right card-img-top img-fluid   "  src="SPEDEMY/sub_menu/btn_change.png"   /></a>
          

     <div class="container-fluid " >
                <a href="/lesson_alphabetsA"> <img  class="   letter let center zoom card-img-top img-fluid marg0"  src="SPEDEMY\Lessons\Alphabet\Alphabets\A.png"   ></a>
                <a href="">     <img  class="   letter let center zoom card-img-top img-fluid" style="margin-top:2%"  src="SPEDEMY\Lessons\Alphabet\Alphabets\B.png"   ></a>
                <a href="">    <img  class="   letter let center zoom card-img-top img-fluid"  style="margin-top:2%" src="SPEDEMY\Lessons\Alphabet\Alphabets\C.png"   ></a>
                   
                <a href="">            <img  class="   letter let center zoom card-img-top img-fluid marg1"  src="SPEDEMY\Lessons\Alphabet\Alphabets\D.png"   >
                <a href="">             <img  class="   letter let center zoom card-img-top img-fluid"  src="SPEDEMY\Lessons\Alphabet\Alphabets\E.png"   >
                <a href="">            <img  class="   letter let center zoom card-img-top img-fluid"  src="SPEDEMY\Lessons\Alphabet\Alphabets\F.png"   >
                <a href="">            <img  class="   letter let center zoom card-img-top img-fluid"  src="SPEDEMY\Lessons\Alphabet\Alphabets\G.png"   >
                <a href="">            <img  class="   letter let center zoom card-img-top img-fluid margine2"  src="SPEDEMY\Lessons\Alphabet\Alphabets\H.png"   >
                <a href="">            <img  class="   letter let center zoom card-img-top img-fluid"  src="SPEDEMY\Lessons\Alphabet\Alphabets\I.png"   >
                <a href="">            <img  class="   letter let center zoom card-img-top img-fluid"  src="SPEDEMY\Lessons\Alphabet\Alphabets\J.png"   >
                <a href="">           <img  class="   letter let center zoom card-img-top img-fluid"  src="SPEDEMY\Lessons\Alphabet\Alphabets\K.png"   >
                <a href="">            <img  class="   letter let center zoom card-img-top img-fluid"  src="SPEDEMY\Lessons\Alphabet\Alphabets\L.png"   >
                <a href="">            <img  class="   letter let center zoom card-img-top img-fluid marg3"  src="SPEDEMY\Lessons\Alphabet\Alphabets\M.png"   >
                <a href="">            <img  class="   letter let center zoom card-img-top img-fluid"  src="SPEDEMY\Lessons\Alphabet\Alphabets\N.png"   >
                <a href="">            <img  class="   letter let center zoom card-img-top img-fluid"  src="SPEDEMY\Lessons\Alphabet\Alphabets\O.png"   >
                <a href="">            <img  class="   letter let center zoom card-img-top img-fluid"  src="SPEDEMY\Lessons\Alphabet\Alphabets\P.png"   >
                <a href="">            <img  class="   letter let center zoom card-img-top img-fluid"  src="SPEDEMY\Lessons\Alphabet\Alphabets\Q.png"   >
                <a href="">            <img  class="   letter let center zoom card-img-top img-fluid"  src="SPEDEMY\Lessons\Alphabet\Alphabets\R.png"   >

                <a href="">            <img  class="   lettersmall let center zoom card-img-top img-fluid marg4"  src="SPEDEMY\Lessons\Alphabet\Alphabets\S.png"   >
                <a href="">            <img  class="   lettersmall let center zoom card-img-top img-fluid"  src="SPEDEMY\Lessons\Alphabet\Alphabets\T.png"   >
                <a href="">            <img  class="   lettersmall let center zoom card-img-top img-fluid"  src="SPEDEMY\Lessons\Alphabet\Alphabets\U.png"   >
                <a href="">            <img  class="   lettersmall let center zoom card-img-top img-fluid"  src="SPEDEMY\Lessons\Alphabet\Alphabets\V.png"   >
                <a href="">            <img  class="   lettersmall let center zoom card-img-top img-fluid"  src="SPEDEMY\Lessons\Alphabet\Alphabets\W.png"   >
                <a href="">            <img  class="   lettersmall let center zoom card-img-top img-fluid"  src="SPEDEMY\Lessons\Alphabet\Alphabets\X.png"   >
                <a href="">            <img  class="   lettersmall let center zoom card-img-top img-fluid"   src="SPEDEMY\Lessons\Alphabet\Alphabets\Y.png"   >
                <a href="">            <img  class="   lettersmall let center zoom card-img-top img-fluid" style="padding-right:0%;"  src="SPEDEMY\Lessons\Alphabet\Alphabets\Z.png"   >
    </div>


         
              


 
 </body>
 </html>
 