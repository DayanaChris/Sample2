@extends('layouts.app')

@section('content')



    <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">

                  <div class="card-header"><h1>CREATE Questionnaire</h1></div>

                  <div class="card-body">
                      @if (session('status'))
                          <div class="alert alert-success" role="alert">
                              {{ session('status') }}
                          </div>
                      @endif



                                     <div class="containers" style=" margin-top: 0%;margin-bottom: 0%; " id="shad" >
                                         <div class="card run-animation" style="background: skyblue; ">
                                            <div class="card-header" style=" background:#FF1E9D"> <h2> <b> CHOOSE A LESSON </b></h2></div>
                                            @if(count($results)>0)
                                              <div class="row">
                                                @foreach($results as $results)
                                                    <div class="col-md-4">

                                                         <a href="/categorys/{{$category->category_id->level}}"> <img style="width:100%" src="/storage/category_image/{{$category->category_image}}" alt=""></a>


                                                  </div>
                                                  <!-- <div class="col=md-4">
                                                    <a href="/categorys/{{$category->category_id}}"> {{$category->category_name}}</a>
                                                  </div> -->
                                                     @endforeach
                                                     {{$categorys->links()}}
                                                     @else
                                                         <p>No category found</p>
                                                         </div>
                                                     @endif
                                             </div>
                                         </div>
                                     </div>






                  </div>
              </div>
          </div>
      </div>
    </div>


@endsection
