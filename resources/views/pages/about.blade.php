
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


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
  transform: scale(1.1, 1.1);
}

/* Fade in the pseudo-element with the bigger shadow */
.box:hover:after {
  opacity: 1;
}
                
</style>

</head>


<body >
    <div id="app">
        

        {{-- <main class="py-4"> --}}

            @include('inc.navbar')
            <div class="container">
                @include('inc.messages')
                @yield('content')
            </div>
        {{-- </main> --}}
    </div>

    
    <div class="container" style=" margin-top: 1%;margin-bottom: 1%;" id="shad" >
                {{-- <div class="row justify-content-center">
                    <div class="col-md-8"> --}}
                        <div class="card">
                           <div class="card-header" style="text-align: center; background:#FF83C9"> <h2> <b> ABOUT THE DEVELOPERS </b></h2></div>
            

                                

                               
                            </div>
                        </div>
    </div> 
    {{-- END CARD BODY --}}
                  

    <div class="container" style=" margin-top: 0%;margin-bottom: 2%;" id="shad">
                {{-- <div class="row justify-content-center">
                <div class="col-md-8"> --}}
                        <div class="card">
        
                                <!-- The Band Section -->
                                <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">  <h4 style="color:#5A2971; text-align:center">
                                                <p class="w3-justify" style=" color:#5A2971;"> <b>  Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                                                ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur
                                                adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </b></h4></p>
                                        
                                </div>
                                {{-- band end --}}   
                        </div>
    </div>
















    <div class="container" style=" margin-top: 2%;margin-bottom: 10%;" id="shad" >
                {{-- <div class="row justify-content-center">
                    <div class="col-md-8"> --}}
                        <div class="card">
                           <div class="card-header" style="text-align: center; background:#FF83C9"> <h2> <b> ABOUT THE DEVELOPERS </b></h2></div>
            
                                <div class="card-body">

                                        <div class="container" >
                                                        <div class="row " >
                                               
                                                          <div class="col-xs-6 col-md-4 box">
                                                            <div class="card" style="background:blueviolet; padding:10%">
                                                              <div class="wrapper">
                                                                <img class="card-img-top img-fluid" style=" border-radius: 50%;"  src="SPEDEMY/About/jp.jpg" alt="Card image cap">
                                                              </div>
                                                              <h4 class="card-title" style="text-align: center;color: white;">John Paul Espejo</h4>
                                                              <div class="card-body">
                                                                <p class="card-text">BSIT-Enterprice Networking </p>
                                                                 
                                                              </div>
                                                            </div>
                                                          </div>

                                                          <div class="col-xs-6 col-md-4 box">
                                                                        <div class="card" style="background:#D00076; padding:10%">
                                                                          <div class="wrapper">
                                                                            <img class="card-img-top img-fluid" style=" border-radius: 50%;" src="SPEDEMY/About/chris.jpg" alt="Card image cap">
                                                                          </div>
                                                                          <h4 class="card-title" style="text-align: center;">Chris Dianne R. Calamba</h4>
                                                                          <div class="card-body">
                                                                            <p class="card-text">BSIT-Software Engineering </p>
                                                                            
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                          <div class="col-xs-6 col-md-4 box">
                                                                        <div class="card" style="background:#65ABFF; padding:10%">
                                                                          <div class="wrapper">
                                                                            <img class="card-img-top img-fluid" style=" border-radius: 50%;" src="SPEDEMY/About/bea.jpg" alt="Card image cap">
                                                                          </div>
                                                                          <h4 class="card-title" style="text-align: center;">Beatrice Anne Tuco</h4>
                                                                          <div class="card-body">
                                                                            <p class="card-text">BSIT-Multimedia System </p>
                                                                            
                                                                            {{-- comment icon --}}
                                                                            {{-- <div class="float-right"><i class="fa fa-comment-o" aria-hidden="true"></i> 0</div> --}}
                                                                          </div>
                                                                        </div>
                                                                      </div>
                                                        </div>
                                        </div>
                                </div> 
                                {{-- end card boy --}}

                                <p class="w3-center" style=" color:#5A2971;"><h4 style="color:#5A2971; text-align:center"> <b>  We are a passionate group of developers. <br>
                                                We create SPEDEMY as a supplementary tool in helping in educating children with autsm.
                                                </b></h4></p>
                                        
                            </div>
                        </div>
    </div>   
 
                        
 


























       

{{-- FOOTER --}}

<div class="footer">
                <nav class="navbar navbar-expand-md   navbar-laravel navbar-dark " style=" background-color: #5A2971; 
                position: fixed;
                left: 0;
                bottom: 0;
                width: 100%;
                text-align: center;
                " >
                        {{-- style="background:#1D1C1C;" --}}
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentfooter" aria-controls="navbarSupportedContentfooter" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                          <span class="navbar-toggler-icon"></span>
                      </button>
            
                      <div class="collapse navbar-collapse" id="navbarSupportedContentfooter">
                          <!-- Left Side Of Navbar -->
                          <ul class="navbar-nav mr-auto">
            
                          </ul>
            
                          <ul class="navbar-nav mr-auto">
                            <li class="nav-item active"><a class="nav-link" href="/about">About <span class="sr-only">(current)</span></a> </li>
                            <li class="nav-item"> <a class="nav-link" href="/contact">Contact</a> </li>
                          
                          </ul>
                      </div>
                
              </nav>
        </div>
            



    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
