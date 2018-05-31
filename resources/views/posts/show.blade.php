@extends('main')

@section('title', 'Show Blog')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{$post->title}}</h1>
            <p class="head">{{$post->body}}</p>
            <hr>
            <div class="tag">
                @foreach ($post->tags as $tag)
                    <span class="label label-info">{{$tag->name}}</span>
                @endforeach
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                        <dl class="dl-horizontal">
                            <dt>Created at:</dt>
                            <dd>{{date('M j,Y h:ia', strtotime($post->created_at))}}</dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt>Last updated:</dt>
                            <dd>{{date('M j,Y h:ia', strtotime($post->updated_at))}}</dd>
                        </dl>
                        <hr>
                        <dl class="dl-horizontal">
                            <dt>Category:</dt>
                            <dd>{{$post->category->name}}</dd>
                        </dl>
                        <br>
                        <div class="row">
                            <div class="col-md-6">
                                <a href="{{action('PostController@edit', $post->id)}}" class="btn btn-primary btn-block">Edit</a>
                            </div>
                            <div class="col-md-6">
                                <form action="{{action('PostController@destroy', $post->id)}}" method="POST">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger btn-block">Delete</button>
                                </form>
                            </div>
                        </div>
                        <hr>
                        <a href="{{action('PostController@index')}}" class="btn btn-success btn-block">See all post</a>
                </div>
                
            </div>
        </div>
    </div>
    
@endsection