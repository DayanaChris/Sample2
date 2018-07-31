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
        label{
            color: #5A2971;
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
                           <div class="card-header" style="text-align: center; background:#FF83C9"><h1> <b>{{$title}}</b></h1></div>
            

                                

                               
                            </div>
                        </div>
    </div> 
    {{-- END CARD BODY --}}
                  



{{-- http://www.learnlaravelwithmohit.com/sending-email-messages-in-laravel-5-5-contact-enquiry-form-example/ --}}
    <div class="container" style=" margin-top: 0%;margin-bottom: 2%;" id="shad">
                {{-- <div class="row justify-content-center">
                <div class="col-md-8"> --}}
                        <div class="card">
        
                                <div class="container col-md-8 col-md-offset-2">
                                        <div class="well well bs-component">
                                 
                                            <form class="form-horizontal" method="post">
                                <!-- Below for each loop display validation error messages -->
                                                @foreach ($errors->all() as $error)
                                                    <p class="alert alert-danger">{{ $error }}</p>
                                                @endforeach
                                 <!-- Below if condition display sending email success message -->               
                                                @if (session('status'))
                                                    <div class="alert alert-success">
                                                        {{ session('status') }}
                                                    </div>
                                                @endif
                                 
                                                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                                 
                                                <fieldset>
                                                    <legend>Send Us your Enquiry</legend>
                                                         <div class="form-group">
                                                          <label for="usr" >Name:</label>
                                                          <input type="text" class="form-control" id="name" name="name">
                                                        </div>
                                                        <div class="form-group">
                                                          <label for="email">Email:</label>
                                                          <input type="text" class="form-control" id="email" name="email">
                                                        </div> 
                                                        <div class="form-group">
                                                        <label for="message">Message</label>
                                                        <textarea class="form-control" rows="3" id="enq_message" name="enq_message"></textarea>
                                                        <span class="help-block">Feel free to ask us any question.</span>
                                                        
                                                    </div> 
                                                    <div class="form-group">
                                                        <div class="col-lg-10 col-lg-offset-2">
                                                            <button class="btn btn-default">Cancel</button>
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </form>
                                            
                                        </div>
                                    </div>
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
                <li class="nav-item "><a class="nav-link" href="/about">About <span class="sr-only">(current)</span></a> </li>
                <li class="nav-item active"> <a class="nav-link" href="/contact">Contact</a> </li>
              
              </ul>
          </div>
    
  </nav>
</div>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>
