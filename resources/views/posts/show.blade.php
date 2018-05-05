@extends('main')

@section('title', 'Show Blog')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <h1>{{$post->title}}</h1>
            <p class="head">{{$post->body}}</p>
        </div>
        <div class="col-md-4">
            <div class="well">
                <dl class="dl-horizontal">
                    <dt>Created at:</dt>
                    <dd>{{date('M j,Y h:ia', strtotime($post->created_at))}}</dd>
                </dl>
                <dl class="dl-horizontal">
                    <dt>Last updated:</dt>
                    <dd>{{date('M j,Y h:ia', strtotime($post->updated_at))}}</dd>
                </dl>
                <hr>
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
                <a href="" class="btn btn-default btn-block">See all post</a>
            </div>
        </div>
    </div>
    
@endsection