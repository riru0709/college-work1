<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Edit Blog</title>
    </head>
    <body>
        <h1 class="title">編集</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
	        @method('PUT')
                @csrf
                <div class='content__title'>
                    <h2>タイトル</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>
                <div class='content__body'>
                    <h2>本文</h2>
                    <input type='text' name='post[body]' value="{{ $post->body }}">
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>
