@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Category</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="panel-body">
                        <a href="/categorys/create" class= "btn btn-primary"> create</a>
                        <h3>Manage Category</h3>
                        @if(count($categorys)>0)
                        <table class="table table-striped">
                            <tr>
                                <th>Category Name</th>
                                <th></th>
                                <th></th>

                            </tr>
                            @foreach($categorys as $category)
                                <tr>
                                    <td>{{$category->category_name}}</td>
                                    <td><a href="/categorys/{{$category->category_id}}/edit" class="btn btn-default">Edit</a></td>
                                    <td>
                                            {!!Form::open(['action'=>['CategorysController@destroy',$category->category_id],'method'=>'POST','class'=>'pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
                                            {!!Form::close()!!}

                                    </td>

                                </tr>
                            @endforeach
                        </table>
                        @else
                            <p>You have no added category</p>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



@include('inc.footer')


@endsection
