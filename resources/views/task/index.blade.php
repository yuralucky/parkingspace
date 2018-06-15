@extends('start')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>              Tasks</h3>
            </div>
            <div class="pull-right">
                <a href="{{route('task.create')}}" class="btn btn-info">Create new task</a>
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
            <th>Description</th>
            <th>Tags</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($tasks as $task)
            <tr>

                <td>{{$task->name}}</td>
                <td>{{$task->description}}</td>
                <td>@foreach($task->tags as $tas)
                        {{$tas->name}}
                    @endforeach</td>
                <td>
                    <form action="{{route('task.destroy',$task->id)}}" method="post">
                        <a href="{{route('task.show',$task->id)}}" class="btn btn-info">Show</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete Task</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{--{!!tags->links()  !!}--}}

@endsection