
@extends('main')
@section('title','Contact')
@section('content')
    

        <div class="row">
            <div class="col-md-12">
                <h1>Contact me</h1>
                <form action="#">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="subject">Subject:</label>
                        <input type="text" name="subject" class="form-control" id="subject">
                    </div>
                    <div class="form-group">
                        <label for="message">Message:</label>
                        <textarea type="text" name="message" class="form-control" id="message" placeholder="Type content"></textarea>

                    </div>
                    <input type="submit" value="Send message" class="btn btn-success"> 
                </form>
            </div>
        </div>
@endsection
