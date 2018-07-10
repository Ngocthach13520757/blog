@extends('main')

@section('title','edit')

@section('stylesheets')
    <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
@endsection

@section('content')
    @php
        var_dump($post);
    @endphp
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <form action="{{route('posts.update',$post->id)}}" method="POST">
                @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" value="{{$post->title}}">
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control" value="{{$post->slug}}">
                </div>
                <div class="form-group">
                    <label for="category_id">Category:</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach ($categories as $category)
                        <option value="{{$category->id}}" {{(isset($post->category))?($category->id===$post->category->id) ? 'selected' : '': ''}}>{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="tags">Tags:</label>
                        <select name="tags[]" id="tags_id" class="form-control select2-multi" multiple="multiple">
                            @foreach ($tags as $tag)
                                <option value="{{$tag->id}}">{{$tag->name}}</option>
                            @endforeach
                        </select>
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

@section('scripts')
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.select2-multi').select2();
            $('.select2-multi').select2().val({{json_encode($post->tags()->allRelatedIds())}}).trigger('change');
        });
        
    </script>
@endsection