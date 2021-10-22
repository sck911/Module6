@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="{{ route('post.store') }}" enctype="multipart/form-data" method="post">
                    @csrf
                    <div class="form-group row">
                        <label for="postpic">Post a picture</label>
                        <input type="file" name="postpic" id="postpic">
                    </div>

                    <div class="form-group row">
                        <label for="caption">Caption</label>
                        <input class="form-control" type="text" name="caption" id="caption">
                    </div>

                    <!-- Post button to submit new post -->
                    <div class="form-group row">
                        <button type="submit" class="btn btn-primary"> Post! </button>
                    </div>

                    <!-- Button to go back to Previous Screen -->
                    <div class="form-group row">
                        <input type="button" value=" Back " class="btn btn-primary" onclick="history.back(-1)">
                    </div>

                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection

