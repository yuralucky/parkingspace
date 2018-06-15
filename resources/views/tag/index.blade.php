@extends('start')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>              Tags</h3>
            </div>
            <div class="pull-right">
                <a href="{{route('tag.create')}}" class="btn btn-info">Create new tag</a>
            </div>
        </div>
    </div>

    @if($message=Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th>Name</th>
            <th>Tasks</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($tags as $tag)
            <tr>

                <td>{{$tag->name}}</td>
                <td>@foreach($tag->tasks as $tag)
                        {{$tag->name}}
                @endforeach
                </td>
                <td>
                    {{Form::open(['action'=>['TagController@destroy',$tag->id],'method'=>'DELETE'])}}
                        <a href="{{route('tag.show',$tag->id)}}" class="btn btn-info">Show</a>
                        {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                    {{Form::close()}}
                </td>
            </tr>
        @endforeach
    </table>

@endsection