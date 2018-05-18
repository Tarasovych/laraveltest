@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edit post</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Error!</strong><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {!! Form::model($post, ['method' => 'PATCH','route' => ['admin.posts.update', $post->id]]) !!}
        @include('admin.posts.form')
        {!! Form::close() !!}
    </div>
@endsection