<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <h1 class="title">BlogName</h1>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
            @csrf
            @method('DELETE')
            <input type="submit" style="display:none">
            <p class='delete'>[<span onclick="return deletePost(this);">削除</span>]</p>
        </form>
	    <div class='content'>
	        <div class="content_title">{{ $post->title }}</div>
            <div class="content_post">
                <h3>本文</h3>
                <p>{{ $post->body }}</p>
            </div>
        </div>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
        <script>
            function deletePost(e){
                'use strict';
                if(confirm('本当に削除しますか？')){
                    document.getElementById('form_{{ $post->id }}').submit();
                }
            }
        </script>
    </body>
</html>
