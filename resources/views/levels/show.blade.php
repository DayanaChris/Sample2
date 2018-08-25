@extends('layouts.app')

@section('content')
    <a href="/levels" class="btn btn-default">Go back</a>

    <h1> {{$level->level_name}}</h1>

    <img style="width:100%"  src="/storage/level_image/{{$level->level_image}}" alt="">

    <br>
    <br>


    <div>
        {!!$level->body!!}
    </div>
    <hr>

    @if(!Auth::guest())
        @if(Auth::user()->id==$level->user_id)
            <a href="/levels/{{$level->level_id}}/edit" class="btn btn-default" >Edit</a>

            {!!Form::open(['action'=>['LevelsController@destroy',$level->level_id],'method'=>'POST','class'=>'pull-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif

    <div class="" style="margin-bottom:10%">

    </div>
    @include('inc.footer')


@endsection
