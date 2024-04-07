<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>会場投稿一覧</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>会場ごとの投稿一覧</h1>
        <a href='/posts/create/'>新規作成</a>
            <h2 class='body'>
                <a href="/posts/"></a>
            </h2>
            <div>
                @foreach ($posts as $post)
                    <div style='border:solid 1px; margin-bottom: 10px;'>
                        <a href={{'/users/show/'.$post->user->id}}>{{$post->user->name}}</a>
                        <a class='eventname'href={{'/events/'.$post->event->id}}>{{$post->event->name}}</a>
                        <a class='venuename'href={{'/venues/'.$post->venue->id}}>{{$post->venue->name}}</a>
                        <a class='performername'href={{'/performers/'.$post->performer->id}}>{{$post->performer->name}}</a>
                        <a class='postId'href={{'/posts/'.$post->id}}>記事の詳細へ</a>
                    </div>
                @endforeach
            </div>
        <div>
            <a href="/">トップページへ</a>
        </div>
    </body>
</html>