@extends('layouts.master')

@section('title', $post->title)

@section('content')

<div class="container">
    <div class="justify-content-center mt-5 row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>{{ $post->title }}</h1>
                    <p>{{ $post->body }}</p>
                    <div class="text-primary">
                        @foreach($post->categories as $key => $category)
                            {{ $category->name }}
                            {{ !$loop->last ? ',' : '' }}
                        @endforeach
                    </div>
                </div>
                <div class="card-footer">
                    <small class="text-muted">
                        Post by {{ $post->author->name }} 
                        on {{ $post->created_at->diffForHumans() }}
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection