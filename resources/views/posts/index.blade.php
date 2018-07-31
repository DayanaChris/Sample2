@extends('layouts.app')

@section('content')
    <h1>POSTS</h1>
    @if(count($posts)>0)
        @foreach($posts as $post)
            <div class = "well">
                <div class="row">
                    <div class ="col-md-4 col-sm-4">
                        <img style="width:100%" src="/storage/cover_images/{{$post->cover_image}}" alt="">

                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                    </div>
                </div>
            </div>
        @endforeach
        {{$posts->links()}}

    @else
        <p>No posts found</p>
    @endif



    <div class="footer"> 
        <nav class="navbar navbar-expand-md   navbar-laravel navbar-dark " style=" background-color: #5A2971; 
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        text-align: center;
        " >
                {{-- style="background:#1D1C1C;" --}} 
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>
    
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
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
@endsection