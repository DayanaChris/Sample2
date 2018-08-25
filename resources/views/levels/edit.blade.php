@extends('layouts.app')

@section('content')

<div class="container">
  <div class="row justify-content-center">
      <div class="col-md-8">
          <div class="card">

              <div class="card-header"><h1>Edit level</h1></div>

              <div class="card-body">
                  @if (session('status'))
                      <div class="alert alert-success" role="alert">
                          {{ session('status') }}
                      </div>
                  @endif

                  <div class="container">
                    {!! Form::open(['action' => ['LevelsController@update', $level->level_id], 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}
                        <div class= "form=group">
                            {{Form::label('level_name', 'level Name')}}
                            {{Form::text('level_name', $level->level_name,['class' =>'form-control', 'placeholder'=>'level Name'])}}
                        </div>
                        <br>


                        <div class = "form-group">
                                {{Form::file('level_image')}}
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
