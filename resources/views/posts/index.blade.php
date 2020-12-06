@extends('layouts.master')

@section('title', 'Post List')

@section('content')

<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">
            <a href="/posts/create" class="btn btn-primary">Create</a>
            <table class="table mt-3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Body</th>
                        {{-- <th>Author</th> --}}
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->id }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->body }}</td>
                        {{-- <td>{{ $post->author->name ?? '' }}</td> --}}
                        <td>
                            <a href="/posts/{{ $post->id }}/edit" class="btn btn-success">Edit</a>
                            <a href="/posts/{{ $post->id }}/delete" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection