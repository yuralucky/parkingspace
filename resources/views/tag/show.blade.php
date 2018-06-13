@extends('welcome')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h3>Show Product</h3>
            </div>
            <div class="pull-right">
                <a href="{{route('tag.index')}}" class="btn btn-info">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-m-12 col-s-12">
            <div class="form-group">
                <strong>Name</strong>
                {{$tag->name}}
            </div>
        </div>
        <div class="col-lg-12 col-m-12 col-s-12">
            <div class="form-group">
                <strong>Detail</strong>
                {{$tag->detail}}
            </div>
        </div>
    </div>
@endsection