@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="m-4">
                <a class="text-decoration-none fs-5" href="{{ route('post.create') }}">Post your blog!</a>
            </div>

            <div class="m-4">


                <div class="text-center mb-4">
                    <h1 class="display-5">All blogs</h1>
                </div>


                <table class="table table-striped-columns table-sm table-bordered">
                    <thead>
                        <tr>
                            <th scope="col" class="px-4 py-2">#</th>
                            <th scope="col" class="px-4 py-2">Title</th>
                            <th scope="col" class="px-4 py-2">Content</th>
                            <th scope="col" class="px-4 py-2">Posted at</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td class="px-4 py-2">{{ $post->id }}</td>
                                <td class="px-4 py-2">{{ Str::limit($post->title, $limit = 10, '...') }}</td>
                                <td class="px-4 py-2">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>{{ Str::limit($post->content, $limit = 70, $end = '...') }}</div>
                                        <div><a class="text-decoration-none fst-italic"
                                                href="{{ route('post.show', $post) }}">Read
                                                more >></a></div>
                                    </div>
                                </td>

                                <td class="px-4 py-2">{{ date('F j, Y', strtotime($post->created_at)) }}</td>
                                <td class="px-4 py-2">
                                    <form action="{{ route('post.destroy', $post->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="text-center">
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
