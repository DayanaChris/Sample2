@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">level</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
                        <a href="/levels/create" class= "btn btn-primary"> create</a>
                        <h3>Manage level</h3>
                        @if(count($levels)>0)
                        <table class="table table-striped">
                            <tr>
                                <th>level Name</th>
                                <th></th>
                                <th></th>

                            </tr>
                            @foreach($levels as $level)
                                <tr>
                                    <td>{{$level->level_name}}</td>
                                    <td><a href="/levels/{{$level->level_id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                                            {!!Form::open(['action'=>['LevelsController@destroy',$level->level_id],'method'=>'POST','class'=>'pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
                                            {!!Form::close()!!}

                                    </td>

                                </tr>
                            @endforeach
                        </table>
                        @else
                            <p>You have no added level</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('inc.footer')


@endsection
