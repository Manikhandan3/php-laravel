@extends('layouts.app')

@section('title', 'Posts')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Create New Post</a>
</div>

@if($posts->count() > 0)
    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                        <small class="text-muted">{{ $post->created_at->format('M d, Y') }}</small>
                        <div class="mt-2">
                            <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-outline-primary">Read More</a>
                            <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-outline-secondary">Edit</a>
                            <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@else
    <p>No posts found. <a href="{{ route('posts.create') }}">Create your first post!</a></p>
@endif
@endsection