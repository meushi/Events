<x-app-layout >
    <div class="bg-gray-900 text-white pb-20">
        <h1 class="flex items-center justify-center font-bold text-lg">投稿詳細</h1>
        <div>
            <p>投稿者：<a  href={{'/users/'.$post->user->id}}>{{$post->user->name}} </a></p>
            <p>イベント：<a href="/events/{{ $post->event->id }}">{{ $post->event->name }}</a></p>
            <p>本文：{{ $post->body }}</p>
            <p>会場:<a  href="/venues/{{ $post->venue->id }}">{{ $post->venue->name }}</a></p>
            <p>出演者:<a href="/performers/{{ $post->performer->id }}">{{ $post->performer->name }}</a></p>
        </div>
        <span>
             
            <!-- もし$niceがあれば＝ユーザーが「いいね」をしていたら -->
            @if($nice)
            <!-- 「いいね」取消用ボタンを表示 -->
            	<a href="{{ route('unnice', $post) }}" class="btn btn-success btn-sm">
            		いいね
            		❤
            		{{--<img src="{{asset('img/nicebutton.png')}}" width="30px">--}}
            		<!-- 「いいね」の数を表示 -->
            		<span class="text-red-500" class="badge">
            			{{ $post->post_likes->count() }}
            		</span>
            	</a>
            @else
            <!-- まだユーザーが「いいね」をしていなければ、「いいね」ボタンを表示 -->
            	<a href="{{ route('nice', $post) }}" class="btn btn-secondary btn-sm">
            		いいね
            		🤍
            		{{--<img src="{{asset('img/nicebutton.png')}}" width="30px">--}}
            		<!-- 「いいね」の数を表示 -->
            		<span class="badge">
            			{{ $post->post_likes->count() }}
            		</span>
            	</a>
            @endif
        </span>
        <div>
            <p>[<a href="/posts/{{ $post->id }}/edit">編集</a>]</p>
            <a href="/">戻る</a>
        </div>
        <div class="card mb-4 flex items-center justify-center">
            <form method="post" action="{{route('comment.store')}}">
                @csrf
                <input type="hidden" name='post_id' value={{$post->id}}>
                <div class="form-group">
                    <textarea class="text-black"name="body" class="form-control" id="body" cols="30" rows="5" 
                    placeholder="コメントを入力する"></textarea>
                </div>
                <div class="form-group mt-4">
                <button class="btn btn-success float-right mb-3 mr-3">コメントする</button>
                </div>
            </form>
        </div> 
            @foreach ($comments as $comment)
                <div class="mt-10" style='border:solid 1px; margin-bottom: 10px;'>
                    <p>{{$comment->user->name}}</p>
                    <p>{{$comment->body}}</p>
                </div>
                <div class="text-right">
                    {{--<img src="{{asset('img/nicebutton.png')}}" width="30px">--}}
                     
                    <!-- もし$niceがあれば＝ユーザーが「いいね」をしていたら -->
                    @if($comment->isliked_comment())
                    <!-- 「いいね」取消用ボタンを表示 -->
                    	<a href="{{ route('comment.unnice', $comment->id) }}" class="btn btn-success btn-sm block">
                    		いいね
                    		❤
                    		<!-- 「いいね」の数を表示 -->
                    		<span class="text-red-500" class="badge">
                    			{{ $comment->comment_likes->count() }}
                    		</span>
                    	</a>
                    @else
                    <!-- まだユーザーが「いいね」をしていなければ、「いいね」ボタンを表示 -->
                    	<a href="{{ route('comment.nice', $comment->id) }}" class="btn btn-secondary btn-sm">
                    		いいね
                    		🤍
                    		<!-- 「いいね」の数を表示 -->
                    		<span class="badge">
                    			{{ $comment->comment_likes->count() }}
                    		</span>
                    	</a>
                    @endif
                </div>
                <form class="text-right relative" method="post" action="{{route('comment.destroy', $comment)}}">
                @csrf
                @method('delete')
                    <button type="submit" class="block right-0 absolute" onClick="return confirm('本当に削除しますか？');">削除</button>
                </form>
            @endforeach
    </div>
</x-app-layout>