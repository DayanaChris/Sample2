
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
 
 
 
 <style>
   
             body {
                 /* background-image: url("https://images.pexels.com/photos/35807/rose-red-rose-romantic-rose-bloom.jpg?auto=compress&cs=tinysrgb&h=350"); */
                 font-family: "Lato", sans-serif;
                 background-image: url("SPEDEMY/blue.png");
                 background-repeat: no-repeat;
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
                /* background: skyblue; */
                margin: 20px auto;
                margin-bottom: 100px;
                padding: 20px 0px;
                padding-bottom: 60px;
                padding-left: 5px;

            }
            .containers ul{
                /* margin: 0px ; */
                padding: 0px;
            }
           
            .containers ul li{
                list-style: none;
                float: left;
                width: 27%; /* width sa box sa lesson */
                height: 180px;
                margin: 2px 20px 30px 50px ;
                box-sizing:border-box;
                /* border:2px solid white; */
            }
            .containers ul li hover{
               opacity: 0.9;
                
            }

            @media screen and (max-width:1250px){
                .containers{
                    /* margin-bottom: 200px; */

                }
                .containers ul li{
                    list-style: none;
                float: left;
                width: 40%; /* width sa box sa lesson */
                height: 180px;
                margin: 2px 20px 30px 50px ;
                box-sizing:border-box;
                /* border:2px solid white; */

                }
                h2{
                    text-align: center;
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
 
            /* Scale up the box */
            .box:hover {
            transform: scale(1.2, 1.2);
            display:block;
            }
            
            /* Fade in the pseudo-element with the bigger shadow */
            .box:hover:after {
            opacity: 1;
            }
                 
            
            @media screen and (max-width:992px){
                .containers ul li{

                    text-align: center;
                    width: 50%;
                    /* margin: 20px;  */
                /* margin: 0px 20px 0px 20px ; */
                margin: 2px 0px 30px 0px ;
}
                  /* Scale up the box */
                  .box:hover {
                transform: scale(1.03, 1.03);
                display:block;
                }
                
                /* Fade in the pseudo-element with the bigger shadow */
                .box:hover:after {
                opacity: 1;
                }
                h2{
                    text-align: center;
                }
                

                
            }
            @media screen and (max-width: 600px) {
                .containers ul li{
                    width: 90%;
                }
                h2{
                    text-align: center;
                } 
            }

            
 </style>
 
 </head>
  
 <body>
     <div id="app"> 
         {{-- <main class="py-4"> --}}
 
             @include('inc.navbar')
             <div class="container">
                 @include('inc.messages')
                 @yield('content')
             </div>
         {{-- </main> --}}
     </div>

                <div class="containers" style=" margin-top: 0%;margin-bottom: 0%; " id="shad" >
                    <div class="card run-animation" style="background: skyblue; ">
                       <div class="card-header" style=" background:#FF1E9D"> <h2> <b> CHOOSE A LESSON </b></h2></div>
                                <div class="containers ">
                                    <ul>  
                                        <li > <a href="/submenu_alphabets"><img class="card-img-top img-fluid box"   src="SPEDEMY/Menupage/a2.png" alt="Card image cap"></a></li>
                                        <li > <a  href="/submenu_numbers"> <img class="card-img-top img-fluid box"   src="SPEDEMY/Menupage/a5.png" alt="Card image cap"></a></li>
                                        <li> <a href="/submenu_colors"> <img class="card-img-top img-fluid box"   src="SPEDEMY/Menupage/a3.png" alt="Card image cap"></a></li>
                                        <li><a href="/submenu_shapes"><img class="card-img-top img-fluid box"   src="SPEDEMY/Menupage/a6.png" alt="Card image cap"></a></li>
                                        <li><a href="/submenu_expressions"><img class="card-img-top img-fluid box"   src="SPEDEMY/Menupage/a4.png" alt="Card image cap"></a></li>
                                        <li><a href="/submenu_actionwords"><img class="card-img-top img-fluid box"   src="SPEDEMY/Menupage/a1.png" alt="Card image cap"></a></li>
                                    </ul>
                        
                                </div>      
                        </div>
                    </div>
                </div>  

      
                

     <script src="{{ asset('js/animate.js') }}" defer></script>

 
 </body>
 </html>
 