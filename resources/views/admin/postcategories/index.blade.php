@extends('layouts.app')

@section('content')
    <h1 class="d-flex justify-content-center">Categories</h1>
    <div class="container">
        <div class="d-flex justify-content-end">
            <a class="btn btn-success" href="{{ route('admin.postcategories.create') }}">Create</a>
        </div>
        <table class="table">
            @foreach($postCategories as $postCategory)
                <tr>
                    <td>
                        <a href="{{ route('admin.postcategories.show', $postCategory->id) }}">{{ $postCategory->name }}</a>
                        <div>
                            <a class="btn btn-warning"
                               href="{{ route('admin.postcategories.edit', $postCategory->id) }}">Edit</a>
                            {!! Form::open(['method' => 'DELETE','route' => ['admin.postcategories.destroy', $postCategory->id],'style'=>'display:inline']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $postCategories->links() }}
    </div>
@endsection