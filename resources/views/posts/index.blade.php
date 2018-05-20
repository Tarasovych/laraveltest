@extends('layouts.app')

@section('content')
    <h1 class="d-flex justify-content-center">Posts</h1>
    <div class="container">
        @yield('admin-post-create')
        <div>
            <button onclick="search()">Search:&nbsp</button>
            <input id="search" type="text"/>
        </div>
        <div class="d-flex justify-content-end">
            <span>Sort by:&nbsp</span>
            <div class="dropdown">
                <a aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown"
                   class="dropdown-toggle" href="#">
                    <span id="selected">{{ Request::input('sort') ? trans('sort.'.Request::input('sort')) : 'Choose option' }}</span><span
                            class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="{{ route('posts.index', 'sort=id') }}">&#9660; id</a></li>
                    <li><a href="{{ route('posts.index', 'sort=-id') }}">&#9650; id</a></li>
                    <li><a href="{{ route('posts.index', 'sort=title') }}">&#9660; title</a></li>
                    <li><a href="{{ route('posts.index', 'sort=-title') }}">&#9650; title</a></li>
                    <li><a href="{{ route('posts.index', 'sort=created_at') }}">&#9660; date</a></li>
                    <li><a href="{{ route('posts.index', 'sort=-created_at') }}">&#9650; date</a></li>
                </ul>
            </div>
        </div>
        @yield('admin-categories-drop')
        <table class="table">
            @foreach($posts as $post)
                <tr>
                    <td>
                        <a class="draggable" href="{{ route('posts.show', $post->id) }}">{{ $post->title }}</a>
                        @if(Request::route()->getName() == 'admin.posts.index')
                            <div>
                                <a class="btn btn-warning"
                                   href="{{ route('admin.posts.edit', $post->id) }}">Edit</a>
                                {!! Form::open(['method' => 'DELETE','route' => ['admin.posts.destroy', $post->id],'style'=>'display:inline']) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </div>
                        @endif
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $posts->appends(['sort' => Request::input('sort')])->links() }}
    </div>
@endsection

<script>
    function search() {
        window.location.href = window.location + '/search?query=' + document.getElementById("search").value
    }
</script>