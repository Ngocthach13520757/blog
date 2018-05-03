@extends('main')

@section('title','edit')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="{{action('PostController@update',$post->id)}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" value="{{$post->title}}">
                </div>
                <div class="fom-group">
                    <label for="body">Body:</label>
                    <textarea name="body" class="form-control" id="body" rows="10">{{$post->body}}</textarea>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Update</button>
            </form>
        </div>
    </div>
@endsection