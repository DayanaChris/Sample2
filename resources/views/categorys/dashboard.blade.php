@extends('layouts.app')

@section('content')
    <h1>CATEGORYS</h1>
    @if(count($categorys)>0)
        @foreach($categorys as $category)
            <div class = "well">
                <div class="row">
                    <div class ="col-md-4 col-sm-4">
                        <!-- <img style="width:100%" src="/storage/category_images/{{$category->category_image}}" alt=""> -->
                        <img style="width:100%"  src="/storage/category_image/{{$category->category_image}}" alt="">

                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/categorys/{{$category->category_id}}">{{$category->category_name}}</a></h3>
                    </div>
                </div>
            </div>
        @endforeach
        {{$categorys->links()}}

    @else
        <p>No category found</p>
    @endif


<div class="" style="margin-bottom:10%">

</div>
  @include('inc.footer')
@endsection
