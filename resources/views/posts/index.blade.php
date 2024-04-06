<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>トップページ</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>投稿一覧</h1>
        <a href='/posts/create/'>新規作成</a>
        <a href='/posts/show/'>投稿詳細</a>
            <h2 class='body'>
                <a href="/posts/"></a>
            </h2>
            <div>
                @foreach ($posts as $post)
                    <div style='border:solid 1px; margin-bottom: 10px;'>
                        <a href={{'/users/show/'.$post->user->id}}>{{$post->user->name}}</a>
                        <a class='eventname'href={{'/events/show/'.$post->event->id}}>{{$post->event->name}}</a>
                        <a class='venuename'href={{'/venues/show/'.$post->venue->id}}>{{$post->venue->name}}</a>
                        <a class='performername'href={{'/performers/show/'.$post->performer->id}}>{{$post->performer->name}}</a>
                        <a class='postId'href={{'/posts/show/'.$post->id}}>{{$post->body}}</a>
                    </div>
                @endforeach
            </div>
        <div>
            <a href="/">トップページへ</a>
        </div>
    </body>
</html>