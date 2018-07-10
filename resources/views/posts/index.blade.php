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
    <br>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover">
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
                            <td>{{str_limit($post->body,50)}}</td>
                            <td>{{date('M j, Y',strtotime($post->created_at))}}</td>
                            <td><a href="{{action('PostController@show',$post->id)}}" class="btn btn-primary">View</a>
                                <a href="{{action('PostController@edit', $post->id)}}" class="btn btn-warning">Edit</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-center">
                {{$posts->links()}}
            </div>
        </div>
    </div>
@endsection