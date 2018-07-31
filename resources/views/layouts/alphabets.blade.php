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

                .color{
                    width: 14%; 
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
             
                 .color2margin{
                    margin-left:50%;
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

                .color{
                    width: 30%; 
                }

                .color2margin{
                    margin-left:20%;
                }
               
            }
 </style>
 </head>
 
 
        @include('inc.messages')
        @yield('content')

 </body>
 </html>
 