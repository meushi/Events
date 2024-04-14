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
            <a href="/events/{{ $post->event->id }}">{{ $post->event->name }}</a>
            <p>イベント名：{{ $event->title }}</p>
            <p>本文：{{ $event->body }}</p>
            <p>イベント：<a href="/events/{{ $event->id }}">{{ $event->name }}</a></p>
            <p>会場：<a href="/venues/{{ $venue->id }}">{{ $venue->name }}</a></p>
            <p>出演者：<a href="/performers/{{ $performer->id }}">{{ $performer->name }}</a></p>
        </div>
        <div class="card-body line-height">
            <div id="comment-post-{{ $post->id }}">
                @include('posts.comment_index')
            </div>
            <a class="light-color post-time no-text-decoration" href="/posts/{{ $post->id }}">{{ $post->created_at }}</a>
            <hr>
            <div class="row actions" id="comment-form-post-{{ $post->id }}">
                <form class="w-100" id="new_comment" action="/posts/{{ $post->id }}/comments" accept-charset="UTF-8" data-remote="true" method="post"><input name="utf8" type="hidden" value="&#x2713;" />
                    {{csrf_field()}}
                    <input value="{{ $post->id }}" type="hidden" name="post_id" />
                    <input value="{{ Auth::id() }}" type="hidden" name="user_id" />
                    <input class="form-control comment-input border-0" placeholder="コメント ..." autocomplete="off" type="text" name="comment" />
                </form>
            </div>
        </div>
        @foreach ($comments as $comment)
                    <div style='border:solid 1px; margin-bottom: 10px;'>
                        <p>{{$comment->body}}</p>
                    </div>
                @endforeach
        <div>
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
            <a href="/">戻る</a>
        </div>
    </body>
</html>