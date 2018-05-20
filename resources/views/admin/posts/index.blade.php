<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
@extends('posts.index')

@section('admin-post-create')
    <div class="d-flex justify-content-end">
        <a class="btn btn-success" href="{{ route('admin.posts.create') }}">Create</a>
    </div>
@endsection

@section('admin-categories-drop')
    <div>
        <label><div id="droppable"><p>Drop post here to change category</p></div></label>
        <select id="categories">
            @foreach($categories as $key => $category)
                <option value="{{$key}}">{{$category}}</option>
            @endforeach
        </select>
    </div>
@endsection

<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
    $(function () {
        $(".draggable").draggable()
        $("#droppable").droppable({
            drop: function (event, ui) {
                let postId = ui.draggable.context.href.match('(\\d+)(?!.*\\d)')[0]
                $(this)
                    .addClass("ui-state-highlight")
                    .find("p")
                    .html("Category changed!")
                var data = {}
                data.category_id = $('#categories').val()
                $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    method: 'PATCH',
                    url: '//laraveltest/admin/posts/' + postId,
                    data: data,
                    success: function (response) {
                        alert('Success')
                        location.href = response.redirect
                    }
                })
            }
        });
    });
</script>

<style>
    #droppable {
        width: 150px;
        height: 50px;
        padding: 0.5em;
        float: left;
        margin: 10px;
    }
</style>