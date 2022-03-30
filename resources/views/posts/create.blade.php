<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Post Blog</title>
    </head>
    <body>
        <h1>投稿</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" />
            </div>
            <div class="body">
                <h2>本文</h2>
                <textarea name="post[body]" placeholder="今日のおやつ"></textarea>
            </div>
            <input type="submit" value="保存"></input>
        </form>
        <div class="back">[<a href="/">back</a>]</div>
    </body>
</html>
