@extends('main')

@section('title','Create new post')

@section('stylesheets')
    <link rel="stylesheet" href="{{asset('css/parsley.css')}}">
    
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
                    <input type="text" class="form-control" name="title" required maxlength="255">
                </div>
                <div class="form-group">
                    <label for="body">Body:</label>
                    <textarea name="body" class="form-control" id="body" rows="10" required>Body....</textarea>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Create Post</button>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('js/parsley.min.js')}}"></script>
@endsection