
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
                 background-repeat: repeat;
                 background-color: #fff;
                 color: #fff;
                 font-family: 'Raleway', sans-serif;
                 font-weight: 100;
                 height: 100vh;
                 margin: 0;
             }
             h2 {
          text-shadow: 2px 2px #757474;
                }
            .containers{
                width: 95%;
                overflow:hidden;
                margin: 0px auto;
                /* margin-bottom: 8%; */
                padding: 20px 0px;
            }
            .containers ul{
                padding: 0px;
            }
            .containers ul li{
                list-style: none;
                float: left;
                width: 27%; /* width sa box sa lesson */
                height: 180px;
                margin: 2px 20px 10px 150px ;
                box-sizing:border-box;
            }
            .containers ul li hover{
               opacity: 0.9;
            }
            @media screen and (max-width:1200px){
                .containers ul li{
                    width: 40%;
                    margin: 20px; 
                }
            }
             .wrapper {
                 position: relative;
                 overflow: hidden;
                 }
                 .wrapper:after {
                 content: '';
                 display: block;
                 padding-top: 100%;
                 }
                 .wrapper img {
                 width: auto;
                 height: 100%;
                 max-width: none;
                 position: absolute;
                 left: 50%;
                 top: 0;
                 transform: translateX(-50%);
                 }
                 #shad {
                opacity: 90;
                box-shadow: 0 5px 15px rgba(0,0,0,0.3);
            /* transition: opacity 0.3s ease-in-out; */
            }
            img {
                display: block;
                margin-left: auto;
                margin-right: auto;
            }
            /* Scale up the box */
            .box:hover {
            transform: scale(1.1, 1.1);
            }
            /* Fade in the pseudo-element with the bigger shadow */
            .box:hover:after {
            opacity: 1;
            }
            .right {
            float: left;
            width: 25%;
            height:15%;
            padding: 10px;
            margin-top: 27px;
            border: 0; 
            background: transparent;
            }
                 
 </style>
 
 </head> 
 <body class="run-animation"> 
                <a href="/main_menu"> <img class="box right" src="SPEDEMY/Lessons/Alphabet/left.png"   /> </a>
                <div  id="logo" class=" container" style=" margin-top: 0%;margin-bottom: 0%; " id="shad" >
                                <div class="containers">
                                     <img  class="" src="SPEDEMY/sub_menu/logo_alphabets.png" style="width:65%;"  > 
                                    <ul> 
                                        <li><a href="/  "> <img class="card-img-top img-fluid box "   src="SPEDEMY/sub_menu/btn_lesson.png" alt="Card image cap"></a></li>
                                        <li><a href="/ "><img class="card-img-top img-fluid box"   src="SPEDEMY/sub_menu/btn_quiz.png" alt="Card image cap"></a></li>
                                    </ul>
                                </div>      
                </div>  
    <script src="{{ asset('js/animate.js') }}" defer></script>


 </body>
 </html>
 