@extends('layouts.master')

@section('title', 'Post Create')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <form action="/posts/{{ $post->id }}/edit" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" value="{{ $post->title }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Body</label>
                            <textarea name="body" class="form-control">
                                {{ $post->body }}
                            </textarea>
                        </div>
                        <button type="submit" class="btn btn-success">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection