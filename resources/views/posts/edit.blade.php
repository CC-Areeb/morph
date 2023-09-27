@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="m-4">
                <h1 class="display-1">Edit your posts</h1>
            </div>

            <div class="">
                <label class="form-label" for="title">Post Title</label>
                <input class="form-control" type="text" name="title" id="title" value="{{ $post->title }}">
            </div>

            <div class="mt-4">
                <label class="form-label" for="content">Post Content</label>
                <textarea class="form-control" type="text" name="content" id="content">
                    {{ $post->content }}
                </textarea>
            </div>
        </div>
    </div>
@endsection
