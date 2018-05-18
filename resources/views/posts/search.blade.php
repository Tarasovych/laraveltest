@extends('layouts.app')

@section('content')
    <h1 class="d-flex justify-content-center">Search results</h1>

    <div class="container">
        <table class="table">
            @foreach($results as $result)
                <tr>
                    <td>
                        <a href="{{ route('posts.show', $result->id) }}">{{ $result->title }}</a>
                        {{--{{$result->title}}--}}
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $results }}
    </div>
@endsection