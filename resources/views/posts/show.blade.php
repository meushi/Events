<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>詳細画面</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>投稿詳細</h1>
        <div>
            <p>本文：{{ $post->body }}</p>
            <p>イベント：<a href="/events/{{ $post->event->id }}">{{ $post->event->name }}</a></p>
            <p>会場:<a href="/venues/{{ $post->venue->id }}">{{ $post->venue->name }}</a></p>
            <p>出演者:<a href="/performers/{{ $post->performer->id }}">{{ $post->performer->name }}</a></p>
        </div>
        <div>
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
            <a href="/">戻る</a>
        </div>
    </body>
</html>