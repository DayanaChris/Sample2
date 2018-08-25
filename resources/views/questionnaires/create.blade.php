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


                      <div class="container">
                        {!! Form::open(['action' => 'QuestionnairesController@store', 'method' => 'POST', 'enctype'=>'multipart/form-data']) !!}


                                    <div class="form-group">
                                      <label for="City">Choose category</label>
                                      <select name="dropdownCity" class="form-control">
                                        @if (isset($categoryDropDown))
                                        @foreach($categoryDropDown as $category_id => $category_name)
                                        <option value="{{$category_id }}" >{{$category_name}}</option>
                                        @endforeach
                                       @endif
                                    </select>
                                    </div>

                                    <div class="form-group">
                                      <label for="City">Choose level</label>
                                      <select name="dropdownCity" class="form-control">
                                        @if (isset($levelDropDown))
                                        @foreach($levelDropDown as $level_id => $level_name)
                                        <option value="{{$level_id }}" >{{$level_name}}</option>
                                        @endforeach
                                       @endif
                                    </select>
                                    </div>

                            <div class= "form=group">
                                {{Form::label('choice1', 'Choice 1')}}
                                {{Form::text('question_name', '',['class' =>'form-control', 'placeholder'=>'Question name'])}}
                            </div>
                            <br>

                            <div class = "form-group">
                              {{Form::label('choice2', 'Choice 2')}}

                                {{Form::file('level_image')}}
                            </div>
                            <div class = "form-group">
                              {{Form::label('choice3', 'Choice 3')}}

                                {{Form::file('level_image')}}
                            </div>
                            <div class = "form-group">
                              {{Form::label('choice4', 'Choice 4')}}

                                {{Form::file('level_image')}}
                            </div>





                            <div class = "form-group">
                              {{Form::label('choice5', 'Choice 5')}}
                                {{Form::file('level_image')}}
                            </div>

                            <div class = "form-group">
                              {{Form::label('is_correct', 'Correct Answer')}}
                                  {{Form::text('is_correct')}}
                            </div>

                            {{Form::submit('Submit',['class'=> 'btn btn-primary'])}}
                        {!! Form::close() !!}

                      </div>






                  </div>
              </div>
          </div>
      </div>
    </div>


@endsection
