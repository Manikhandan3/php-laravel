@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Welcome to My Laravel Website!</h1>
    <p class="lead">This is a basic Laravel website with MySQL integration.</p>
    <a class="btn btn-primary btn-lg" href="{{ route('posts.index') }}" role="button">View Posts</a>
</div>
@endsection