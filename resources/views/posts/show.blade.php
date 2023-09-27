@extends('layouts.master')

@section('content')
    <div class="text-center mt-4">
        <span class="display-5">
            {{ $post->title }}
        </span>
    </div>

    <div class="m-4">
        <article class="fs-3">
            {{ $post->content }}
        </article>
    </div>

    <div class="m-4 d-flex justify-content-around">
        <span class="mx-4">
            {{ date('F j, Y', strtotime($post->created_at)) }}
        </span>

        <span class="mx-4">
            <a href="{{ route('post.edit', ['post' => $post]) }}">Edit</a>
        </span>
    </div>
@endsection
