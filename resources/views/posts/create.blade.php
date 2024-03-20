<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>投稿作成</title>
    </head>
    <body>
        <h1>投稿作成</h1>
        <form action="/posts" method="POST">
            @csrf
            <div class="body">
                <textarea name="post[body]" placeholder="楽しかった。"></textarea>
            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">投稿一覧へ</a>
        </div>
    </body>
</html>