@extends('layouts.app')

@section('content')
    <h1>levelS</h1>
    @if(count($levels)>0)
        @foreach($levels as $level)
            <div class = "well">
                <div class="row">
                    <div class ="col-md-4 col-sm-4">
                        <!-- <img style="width:100%" src="/storage/level_images/{{$level->level_image}}" alt=""> -->
                        <img style="width:100%"  src="/storage/level_image/{{$level->level_image}}" alt="">

                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/levels/{{$level->level_id}}">{{$level->level_name}}</a></h3>
                    </div>
                </div>
            </div>
        @endforeach
        {{$levels->links()}}

    @else
        <p>No level found</p>
    @endif


<div class="" style="margin-bottom:10%">

</div>
  @include('inc.footer')
@endsection
