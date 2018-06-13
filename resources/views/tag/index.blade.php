@extends('welcome')
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
            <th>Date create</th>
            <th width="280px">Action</th>
        </tr>
        @foreach($tags as $tag)
            <tr>

                <td>{{$tag->name}}</td>
                <td>{{$tag->created_at}}</td>
                <td>
                    <form action="{{route('tag.destroy',$tag->id)}}" method="post">
                        <a href="{{route('tag.show',$tag->id)}}" class="btn btn-info">Show</a>

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    {{--{!!tags->links()  !!}--}}

@endsection