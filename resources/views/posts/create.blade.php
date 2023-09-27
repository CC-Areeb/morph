@extends('layouts.master')

@section('content')

    <div class="text-center mt-4">
        <h1 class="display-5">
            Create your own blog!
        </h1>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="mb-3">
                <label for="title" class="form-label">Blog Title</label>
                <input type="email" name="title" class="form-control" id="title" placeholder="My blog title">
            </div>
            <div class="mb-3">
                <label for="content" class="form-label">Blog Content</label>
                <textarea class="form-control" name="content" id="content" rows="5" placeholder="My blog content"></textarea>
            </div>
        </div>
    </div>
@endsection
