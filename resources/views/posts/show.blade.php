@extends('layouts.app')

@section('content')
    <h1 class="d-flex justify-content-center">{{ $post->title }}</h1>

    <div class="container">
        <h2 class="d-flex justify-content-end">Category: {{ $post->postCategory->name }}</h2>
        <div>
            {{ $post->content }}
        </div>
    </div>
@endsection