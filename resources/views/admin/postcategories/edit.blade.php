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

        {!! Form::model($postCategory, ['method' => 'PATCH','route' => ['admin.postcategories.update', $postCategory->id]]) !!}
        @include('admin.postcategories.form')
        {!! Form::close() !!}
    </div>
@endsection