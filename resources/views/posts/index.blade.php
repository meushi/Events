<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>投稿一覧</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>{{$username}}</h1>
        <a href={{'/posts/create/'}}>新規作成</a>
        <div>
            @foreach ($posts as $post)
                <div style='border:solid 1px; margin-bottom: 10px;'>
                    <p> {{ $post->body }}</p>
                    <a class='postId'href={{'/post/'.$post->id}}>{{$post->title}}</a>
                </div>
            @endforeach
        </div>
        <div>
            <a href="/">トップページへ</a>
        </div>
    </body>
</html>