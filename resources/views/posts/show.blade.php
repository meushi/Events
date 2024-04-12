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
            <p>イベント：<a href="/events/{{ $post->event->id }}">{{ $post->event->name }}</a></p>
            <p>本文：{{ $post->body }}</p>
            <p>会場:<a href="/venues/{{ $post->venue->id }}">{{ $post->venue->name }}</a></p>
            <p>出演者:<a href="/performers/{{ $post->performer->id }}">{{ $post->performer->name }}</a></p>
        </div>
        <span>
            <img src="{{asset('img/nicebutton.png')}}" width="30px">
             
            <!-- もし$niceがあれば＝ユーザーが「いいね」をしていたら -->
            @if($nice)
            <!-- 「いいね」取消用ボタンを表示 -->
            	<a href="{{ route('unnice', $post) }}" class="btn btn-success btn-sm">
            		いいね
            		<!-- 「いいね」の数を表示 -->
            		<span class="badge">
            			{{ $post->post_likes->count() }}
            		</span>
            	</a>
            @else
            <!-- まだユーザーが「いいね」をしていなければ、「いいね」ボタンを表示 -->
            	<a href="{{ route('nice', $post) }}" class="btn btn-secondary btn-sm">
            		いいね
            		<!-- 「いいね」の数を表示 -->
            		<span class="badge">
            			{{ $post->post_likes->count() }}
            		</span>
            	</a>
            @endif
        </span>
        <div>
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
            <a href="/">戻る</a>
        </div>
        <div class="card mb-4">
            <form method="post" action="{{route('comment.store')}}">
                @csrf
                <input type="hidden" name='post_id' value="{{$post->id}}">
                <div class="form-group">
                    <textarea name="body" class="form-control" id="body" cols="30" rows="5" 
                    placeholder="コメントを入力する">{{old('body')}}</textarea>
                </div>
                <div class="form-group mt-4">
                <button class="btn btn-success float-right mb-3 mr-3">コメントする</button>
                </div>
            </form>
        </div> 
            <form method="post" action="{{route('post.destroy', $post)}}">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" onClick="return confirm('本当に削除しますか？');">削除</button>
            </form>
    </body>
</html>