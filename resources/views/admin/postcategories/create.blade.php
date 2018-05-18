@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create post category</h1>

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

        {!! Form::open(['route' => 'admin.postcategories.store','method'=>'POST']) !!}
        @include('admin.postcategories.form')
        {!! Form::close() !!}
    </div>
@endsection