@extends('start')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Tag</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('tag.index') }}"> Back</a>
            </div>
        </div>
    </div>


    {{Form::open(['action'=>'TagController@store','method'=>'POST'])}}
    {{Form::label('name')}}
    {{Form::text('name','',['class'=>'form-control'])}}
    <hr>
    {{Form::label('tasks for tag')}}
    {{Form::select('tasks[]',$tasks,'',['class'=>'form-control','multiple'])}}
    <hr>
    {{Form::submit('Add new tag',['class'=>'btn btn-block bnt-info'])}}
    {{Form::close()}}

@endsection