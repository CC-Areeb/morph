@extends('layouts.master')

@section('content')
    <div class="text-center mt-4">
        <h1 class="display-5">
            Create your own blog!
        </h1>
    </div>

    <div class="container mt-4">
        <div class="row">
            <form action="{{ route('post.index') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Blog Title</label>
                    <input type="text" name="title" class="form-control" id="title" placeholder="My blog title">
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">Blog Content</label>
                    <textarea class="form-control" name="content" id="content" rows="5" placeholder="My blog content"></textarea>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-outline-success">Publish!</button>
                </div>

                <a href="{{ route('post.index') }}" class="text-decoration-none fs-5">Back to home!</a>
            </form>
        </div>
    </div>
@endsection
