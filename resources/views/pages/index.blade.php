{{-- @extends('layouts.app')

@section('content')
 --}}



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


    <style>
            body {
                /* background-image: url("https://images.pexels.com/photos/35807/rose-red-rose-romantic-rose-bloom.jpg?auto=compress&cs=tinysrgb&h=350"); */

                /* background-image: url("SPEDEMY/blue.png"); */
                background-repeat: no-repeat;
                background-color: #FFFFFF;
                /* color: #636b6f; */
                /* font-family: 'Raleway', sans-serif;
                font-weight: 100; */
                height: 140vh;
                margin: 0;
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


<img src="SPEDEMY/main.png" alt="welcome" width= "100%" height="100%" style="margin=0; margin-bottom: 7%;">
 






<div class="footer"> 
    <nav class="navbar navbar-expand-md   navbar-laravel navbar-dark " style=" background-color: #5A2971; 
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
    " >

    <div class="container"> 
            {{-- style="background:#1D1C1C;" --}} 
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContentfooter" aria-controls="navbarSupportedContentfooter" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContentfooter">
              <!-- Left Side Of Navbar -->
              <ul class="navbar-nav mr-auto">
              </ul>

              <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a> </li>
                <li class="nav-item"> <a class="nav-link" href="/about">About</a> </li>
                <li class="nav-item"> <a class="nav-link" href="/services">Services</a> </li>
                <li class="nav-item"> <a class="nav-link" href="/posts">Blog</a> </li>
              </ul> 
          </div> 
  </nav>
</div>


{{-- @endsection --}}




    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</body>
</html>




