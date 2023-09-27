@extends('layouts.master')

@section('content')
    <div class="text-center mt-4">
        <span class="display-5">
            {{ $post->title }}
        </span>
    </div>

    <div class="container">
        <div class="row">
            <div class="col">
                <div class="m-4 text-center">
                    <article class="fs-3">
                        {{ $post->content }}
                    </article>
                </div>

                <div class="container text-center">
                    <div class="row">
                        <div class="col">
                            <span class="mx-4">
                                {{ date('F j, Y', strtotime($post->created_at)) }}
                            </span>
                        </div>

                        <div class="col">
                            <span class="mx-4">
                                <a href="{{ route('post.edit', ['post' => $post]) }}"
                                    class="text-decoration-none fs-5">Edit</a>
                            </span>
                        </div>

                        <div class="col">
                            <a href="{{ route('post.index') }}" class="text-decoration-none fs-5">Home</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
