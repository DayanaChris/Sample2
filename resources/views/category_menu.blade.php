@extends('layouts.app')

@section('content')




      <form class="" action="level_menu" method="get">




                   <div class="container" style=" margin-top: 80px;margin-bottom: 10px; " id="shad" >
                       <div class="card run-animation" style="background: skyblue; ">
                          <div class="card-header" style=" background:#FF1E9D"> <h2> <b> CHOOSE A LESSON </b></h2></div>
                          @if(count($categorys)>0)

                            <div class="row">
                              @foreach($categorys as $category)
                                  <div class="col-md-4">
                                    <button name="category_id" value="{{$category->category_id}}" id="{{$category->category_id}}" style="background: transparent; border: none">
                                    <a >  <img class="box" style="width:100%" src="./storage/category_image/{{$category->category_image}}" alt=""> </a>
                                    </button>

                                </div>
                                   @endforeach
                                   {{$categorys->links()}}
                                   @else
                                       <p>No category found</p>
                                       </div>
                                   @endif
                           </div>
                  </div>
          </form>
      @endsection
