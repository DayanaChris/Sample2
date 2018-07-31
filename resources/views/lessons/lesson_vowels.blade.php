
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
   
             body {
                 font-family: "Lato", sans-serif;
                 background-image: url("SPEDEMY/sub_menu/background.jpg");
                 background-repeat: repeat;
                 font-weight: 100;
                 height: 100vh;
                 margin: 0;
             }
                .letter{
                    width:22%;  
           

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
                margin-left:25%;
                
            }
            .marg1{
                margin-left: 17%;
                margin-bottom: 2%;
            }
            .marg2{
                margin-left: 25%;
                margin-bottom: 2%;
            }
            .marg3{
                margin-left: 28%;
            }
            .marg4{
                margin-left: 3%;
            }
           
            .zoom:hover {
                -ms-transform: scale(1.3); /* IE 9 */
                -webkit-transform: scale(1.3); /* Safari 3-8 */
                transform: scale(1.3); 
            }  
              @media screen and (max-width: 576px) {
 
                .btn{
                    width: 90%;
                }
                .letter{
                    width: 40%;
                }
                 
                .marg0{
                    margin-left:20%; 
                    margin-top: 15%;

                }
                
                .marg1,.marg3,.marg4,.marg2{
                    margin-left:8%; 
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
                    width: 90%;
                }
                .letter{
                    width: 40%;
                }
                 
                .marg0{
                    margin-top: 15%;

                    margin-left:20%; 

                }
                .marg1,.marg3,.marg4,.marg2{
                    margin-left:8%; 
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




     
     <a href="/submenu_alphabets "> <img class="zoom  container float-left  card-img-top img-fluid    " style=" width: 15%;  
        margin-top: 0px;
         padding:10px;
        {{-- margin-bottom: 40px; --}}
        border: 0; 
        background: transparent; " src="SPEDEMY/Lessons/Alphabet/left.png"   /></a>
      
        <a href="/lesson_alphabets "> <img class="zoom  container float-right card-img-top img-fluid   " style=" width: 15%; 
            margin-top: 0px;
         padding:10px;
        {{-- margin-bottom: 40px; --}}
        border: 0; 
        background: transparent; 
             " src="SPEDEMY/sub_menu/btn_change.png"   /></a>
          

     <div class="container-fluid " >

           
          
                <a href=""><img  class="   letter let center zoom card-img-top img-fluid marg0"  src="SPEDEMY\Lessons\Alphabet\Alphabets\a2.png"   ></a>
               <br>
                <a href=""><img  class="   letter let center zoom card-img-top img-fluid marg1"   src="SPEDEMY\Lessons\Alphabet\Alphabets\e2.png"   ></a>
                <a href=""><img  class="   letter let center zoom card-img-top img-fluid marg2" src="SPEDEMY\Lessons\Alphabet\Alphabets\i2.png"   ></a>
                   <br>

                <a href=""><img  class="   letter  let center zoom card-img-top img-fluid marg3"  src="SPEDEMY\Lessons\Alphabet\Alphabets\o2.png"   >
                <a href=""><img  class="   letter  let center zoom card-img-top img-fluid marg4"  src="SPEDEMY\Lessons\Alphabet\Alphabets\u2.png"   >

                </div>


         
              


 
 </body>
 </html>
 

 