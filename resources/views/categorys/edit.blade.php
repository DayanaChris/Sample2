@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">

              <div class="card-header"><h1>Edit CATEGORY</h1></div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif

                  <div class="container">
                    {!! Form::open(['action' => ['CategorysController@update', $category->category_id], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
                        <div class= "form=group">
                            {{Form::label('category_name', 'Category Name')}}
                            {{Form::text('category_name', $category->category_name,['class' =>'form-control', 'placeholder'=>'Category Name'])}}
                        </div>
                        <br>


                        <div class = "form-group">
                                {{Form::file('category_image')}}
                        </div>


                        {{Form::hidden('_method','PUT')}}
                        {{Form::submit('Submit',['class'=> 'btn btn-primary'])}}
                    {!! Form::close() !!}

                  </div>
              </div>
          </div>
      </div>
  </div>
</div>



@endsection
