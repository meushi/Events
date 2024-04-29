<x-app-layout >
    <div class="bg-gray-900 text-white">
        <h1 class="flex items-center justify-center font-bold text-lg">出演者ごとの投稿一覧</h1>
        <body>
            <a class="flex items-center justify-center font-bold" href='/posts/create/'>新規作成</a>
                <h2 class='body'>
                    <a href="/posts/"></a>
                </h2>
                <div>
                    @foreach ($posts as $post)
                        <div style='border:solid 1px; margin-bottom: 10px;'>
                            <a href={{'/users/'.$post->user->id}}>{{$post->user->name}}</a>
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
    </div>
</x-app-layout>