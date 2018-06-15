@extends('start')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Single tag</h3>
            </div>
            <div class="pull-right">
                <a href="{{route('tag.create')}}" class="btn btn-info">Create new tag</a>
            </div>
        </div>
    </div>

       <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Tasks list</th>
            <th width="280px">Action</th>
        </tr>

            <tr>
                <td>{{$tag->id}}</td>
                <td>{{$tag->name}}</td>
                <td>@foreach($tag->tasks as $tag)
                        {{$tag->name}}
                    @endforeach</td>
                <td>
                    <form action="{{route('tag.destroy',$tag->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>

    </table>


@endsection