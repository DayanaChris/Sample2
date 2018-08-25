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


    <a href="/main_menu "> <img class="zoom  box container float-left card-img-top img-fluid   " style=" width: 15%;
        padding: 10px;
        margin-top: 100px;
        margin-bottom: 20px;
        border: 0;
        background: transparent; " src="SPEDEMY/Lessons/Alphabet/left.png"   /></a>

        <form class="" action="questionnaires.dashdash" method="get">

                 <div class="containers" style=" margin-top: 0%;margin-bottom: 0%; " id="shad" >
                     <div class="card run-animation" style="background: skyblue; ">
                        @if(count($levels)>0)
                                  <div class="row">
                                    @foreach($levels as $level)

                                              <div class="col-md-4">
                                                  <!-- get the category id clicked from previous page -->
                                                  <?php $cat_id= $_GET['category_id'];
                                                  echo "$cat_id";

                                                  ?>
                                                    <!--print the & using urkdecode  -->
                                                    <!-- prints & -->



                                                    <?php
                                                    // echo $variable = urldecode($_GET['variable']);
                                                    echo $url = 'category_id='.urldecode('&category_id=');
                                                    echo '<br />';
                                                    echo urldecode($url);
                                                     ?>

                                                <button name="level_id" value="{{$level->level_id}}<?php echo "&category_id=".$cat_id;?>" id="{{$level->level_id}}<?php echo "&category_id=".$cat_id;?>"
                                                  style="background: transparent; border: none">
                                                  <a>   <img style="width:100%" class="box" src="./storage/level_image/{{$level->level_image}}" alt="">
                </a>
                                                </button>




                                               <!-- <img style="width:100%" src="./storage/level_image/{{$level->level_image}}" alt=""></a> -->

                                            </div>
                                      <!-- <div class="col=md-4">
                                        <a href="/levels/{{$level->level_id}}"> {{$level->level_name}}</a>


                                      </div> -->

                                         @endforeach
                                         {{$levels->links()}}

                                         @else
                                             <p>No level found</p>

                                             </div>
                                 @endif
                     </div>
                 </div>
               </form>
               <script src="{{ asset('js/app.js') }}" defer></script>
               <script src="{{ asset('js/animate.js') }}" defer></script>
</body>
</html>
