@extends('main')

@section('title','Create new post')

@section('stylesheets')
    <link rel="stylesheet" href="{{asset('css/parsley.css')}}">
    <link rel="stylesheet" href="{{asset('css/select2.min.css')}}">
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Create New Post</h1>
            <hr>
            <form action="{{url('/posts')}}" method="POST" data-parsley-validate>
                @csrf
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" class="form-control" name="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="slug">Slug</label>
                    <input type="text" name="slug" id="slug" class="form-control" placeholder="Enter slug">
                </div>
                <div class="form-group">
                    <label for="category_id">Select category:</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>                            
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="category_id">Select Tags:</label>
                    <select name="tags[]" id="tag_id" class="form-control select2-multi" multiple="multiple">
                        @foreach ($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>                            
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea name="body" class="form-control" id="body" rows="10" placeholder="Enter body"></textarea>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Create Post</button>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('js/parsley.min.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script>
        $(document).ready(function() {
            $('.select2-multi').select2();
        });
    </script>
@endsection