@extends('main')

@section('title','All blog')

@section('content')
    
    <div class="row">
        <div class="col-md-10">
            <h1>All blogs</h1>
        </div>
        <div class="col-md-2">
            <a href="{{action('PostController@create')}}" class="btn btn-primary btn-block btn-h1-spacing">Create new blog</a>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <th>#</th>
                    <th>Title</th>
                    <th>Body</th>
                    <th>Created at</th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{str_limit($post->title,30)}}</td>
                            <td>{{substr($post->body,0,50)}}</td>
                            <td>{{$post->created_at}}</td>
                            <td><a href="{{action('PostController@show',$post->id)}}" class="btn btn-default">View</a> <a href="{{action('PostController@edit', $post->id)}}" class="btn btn-default">Edit</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection