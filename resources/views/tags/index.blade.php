
@extends('main')

@section('title','Tag')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info">
                    List of Tag
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tags as $tag)
                                <tr>
                                    <td>{{$tag->id}}</td>
                                    <td><a href="#">{{$tag->name}} <span class="badge badge-secondary" data-toggle="confirmation">{{$tag->posts()->count()}}</span></a></td>
                                </tr>                        
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <form action="{{route('tags.store')}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header bg-warning">
                        New Tag
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-warning">Create</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="{{asset('js/bootstrap-confirmation.min.js')}}"></script>
    <script src="{{asset('js/parsley.min.js')}}"></script>
@endsection