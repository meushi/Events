<x-app-layout >
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <div class="bg-gray-900 text-white">
            <head>
                <meta charset="utf-8">
                <title class="flex items-center justify-center font-bold text-lg">投稿作成</title>
            </head>
            <body>
                <form action="/posts" method="POST">
                    @csrf
                    <div class="title">
                        <textarea name="post[title]" placeholder="イベント名"></textarea>
                    </div>
                    <div class="body">
                        <textarea name="post[body]" placeholder="楽しかった。"></textarea>
                    </div>
                    <div class="Event">
                    <h2>イベント</h2>
                        <select class="text-black" name="post[event_id]">
                            @foreach($events as $event)
                                <option value="{{ $event->id }}">{{ $event->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="Venue">
                    <h2>会場</h2>
                        <select class="text-black" name="post[venue_id]">
                            @foreach($venues as $venue)
                                <option value="{{ $venue->id }}">{{ $venue->name }}</option>
                            @endforeach
                        </select>
                    </div><div class="Performer">
                    <h2>出演者</h2>
                        <select class="text-black" name="post[performer_id]">
                            @foreach($performers as $performer)
                                <option value="{{ $performer->id }}">{{ $performer->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="submit" value="store"/>
                </form>
                <div class="footer">
                    <a href="/">投稿一覧へ</a>
                </div>
            </body>
        </div>
    </html>
</x-app-layout>