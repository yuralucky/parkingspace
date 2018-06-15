@extends('start')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Task</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('task.index') }}"> Back</a>
            </div>
        </div>
    </div>


    {{Form::open(['action'=>'TaskController@store','method'=>'post'])}}

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    {{Form::label('Name')}}
                    {{Form::text('name','',['class'=>'form-control'])}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                   {{Form::label('Description')}}
                    {{Form::text('description','',['class'=>'form-control'])}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                {{Form::label('List of tags')}}
                {{Form::select('tags[]',$tags,'',['class'=>'form-control','multiple'])}}
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                {{Form::submit('Add new tag',['class'=>'btn btn-primary btn-block'])}}
            </div>
        </div>


    {{Form::close()}}

@endsection