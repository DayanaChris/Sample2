
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
                 font-family: "Lato", sans-serif;
                 background-repeat: repeat;
                 font-family: 'Raleway', sans-serif;
                 font-weight: 100;
                 height: 100vh;
                 margin: 0;
             }
            .learn_alphabets{background-image: url("SPEDEMY/sub_menu/bg_alphabet.jpg");}
            .learn_numbers{background-image: url("SPEDEMY/sub_menu/bg_numbers.jpg");}
            .learn_shapes{  background-image: url("SPEDEMY/sub_menu/bg_shapes.jpg");}      
            .learn_colors{background-image: url("SPEDEMY/sub_menu/bg_colors.jpg");  }
            .learn_action_words{background-image: url("SPEDEMY/sub_menu/bg_action_words.jpg"); }
            .learn_facial_expressions{background-image: url("SPEDEMY/sub_menu/bg_facial_expressions.jpg")}
            img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            }
            img.center {
            display: block;
            margin: 0 auto;
            }
            .log{
                margin-top: 5%;
                width:70%; 
            }
           .back{
            width: 15%; 
            padding: 10px;
            margin-top: 0px;
            margin-bottom: 20px;
            border: 0; 
            background: transparent; 
            }
            /* hover */
            .zoom:hover {
                -ms-transform: scale(1.3); /* IE 9 */
                -webkit-transform: scale(1.3); /* Safari 3-8 */
                transform: scale(1.3); 
            }  
            
             @media screen and (max-width: 576px) {
 
                .btn{
                    width: 90%;
                }
                .pad{
                    padding-bottom: 50px;
                }
                .log{
                    margin-top: 5%;
                    width:100%;  
                }
                .back{ 
                margin-top: 0%;
                width:50%;  
                } 
            }


             @media screen and (max-width: 767px) {
            .btn{ width: 80%; }
            .pad{ padding-bottom: 50px;}
            .log{ margin-top: 5%;
                    width:100%;             }
            .back{margin-top: 5%;
                width:30%;                  } 
            }

            @media screen and (max-height: 767px) {
            .btn{ width: 90%; }
            .pad{ padding-bottom: 50px;         }
            .log{
                margin-top: 5%;
                width:70%;  
            }
            .back{ 
            margin-top: 0%;
            width:40%;  
            } 
            }

            @media screen and (max-width:992px){
            .btn{
                width: 80%;
            }
                .pad{
                padding-bottom: 50px;
            }
            .back{ 
                margin-top: 5%;
                width:20%;  
            }
            }    

                /* galaxy s5
                @media screen and (min-height:992px){
                .btn{
                    width: 100%;
                }
                .log{
                        margin-top: 5%;
                        width:100%;  
                } .pad{

                    padding-top: 10px;

                    padding-bottom: 150px;
                }
                .backsmall{ 
                    width:75%;  
                }
                }  */


                @media screen and (max-width:1200px){
                .btn{
                    width: 80%;
                }
                    .pad{
                    padding-bottom: 50px;
                }
                .back{ 
                    margin-top: 5%;
                    width:20%;  
                }
                }


                @media screen and (min-height:1200px){
                .btn{
                    width: 100%;
                }
                .log{
                        margin-top: 5%;
                        width:100%;  
                } .pad{

                    padding-top: 150px;

                    padding-bottom: 150px;
                }
                .back{ 
                    width:35%;  
                }
                } 

 </style>
 
 </head> 
 
            @include('inc.messages')
            @yield('content')
       
</body>
</html>