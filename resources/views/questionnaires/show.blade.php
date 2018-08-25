@extends('layouts.app')

@section('content')
    <a href="/categorys" class="btn btn-default">Go back</a>

    <h1> {{$category->category_name}}</h1>

    <img style="width:100%"  src="/storage/category_image/{{$category->category_image}}" alt="">

    <br>
    <br>


    <div>
        {!!$category->body!!}
    </div>
    <hr>

    @if(!Auth::guest())
        @if(Auth::user()->id==$category->user_id)
            <a href="/categorys/{{$category->category_id}}/edit" class="btn btn-default" >Edit</a>

            {!!Form::open(['action'=>['CategorysController@destroy',$category->category_id],'method'=>'POST','class'=>'pull-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif

    <div class="" style="margin-bottom:10%">

    </div>
    @include('inc.footer')


@endsection
