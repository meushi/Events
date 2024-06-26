<x-app-layout>
    <div class="bg-gray-900 text-white">
        <body>
            <h1 class="flex items-center justify-center font-bold text-lg">投稿一覧</h1>
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
                            <div class="card-body">
                                <p>{{Str::limit($post->body,100,'・・・')}}</p>
                            </div>
                            <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
                                <div class="px-4 pt-3"> 
                                   <button type="button" class="btn btn-primary">
                                      <a class="text-decoration-none" href='/posts/{{ $post->id }}' style="color:white;">詳細・コメントする</a>
                                  </button> </div>
                            </div>
                        </div>
                    @endforeach
                </div>
        </body>
    </div>
</x-app-layout>