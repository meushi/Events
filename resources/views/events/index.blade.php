<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>イベント投稿一覧</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>イベントごとの投稿一覧</h1>
        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
        <a href='/posts/create/'>新規作成</a>
            <h2 class='body'>
                <a href="/posts/"></a>
            </h2>
            <div>
                @foreach ($posts as $post)
                    <div style='border:solid 1px; margin-bottom: 10px;'>
                        <a href={{'/users/show/'.$user->id}}>{{$user->name}}</a>
                        <a href={{'/events/show/'.$event->id}}>{{$event->name}}</a>
                        <a class='postId'href={{'/posts/'.$post->id}}>{{$postId}}</a>
                    </div>
                @endforeach
            </div>
        <div>
            <a href="/">トップページへ</a>
        </div>
    </body>
</html>