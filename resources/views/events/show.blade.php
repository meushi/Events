<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>イベントの詳細画面</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>イベント詳細</h1>
        <div>
            <p>イベント名：{{ $event->title }}</p>
            <p>本文：{{ $event->body }}</p>
            <p>イベント：<a href="/events/{{ $event->id }}">{{ $event->name }}</a></p>
            <p>会場：<a href="/venues/{{ $venue->id }}">{{ $venue->name }}</a></p>
            <p>出演者：<a href="/performers/{{ $performer->id }}">{{ $performer->name }}</a></p>
        </div>
        <div>
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
            <a href="/">戻る</a>
        </div>
    </body>
</html>