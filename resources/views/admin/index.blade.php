@extends('layouts.app')

@section('content')
    <div class="container">
        <a class="navbar-brand" href="{{ route('admin.posts.index') }}">
            Posts
        </a>
        <a class="navbar-brand" href="{{ route('admin.postcategories.index') }}">
            Categories
        </a>
    </div>
@endsection