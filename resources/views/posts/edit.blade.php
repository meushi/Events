<x-app-layout>
    <x-slot name="header">
        edit.blade
    </x-slot>
        <div class="bg-gray-900 text-white pb-20">
            <h1 class="flex items-center justify-center font-bold text-lg">編集画面</h1>
        <body>
            <div class="content">
                <form action="/posts/{{ $post->id }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class='content__title'>
                        <h2 class="text-white">タイトル</h2>
                        <input class="text-black" type='text' name='post[title]' value="{{ $post->title }}">
                    </div>
                    <div class='content__body'>
                        <h2 class="text-white">本文</h2>
                        <input class="text-black" type='text' name='post[body]' value="{{ $post->body }}">
                    </div>
                    <input type="submit" value="保存">
                </form>
            </div>
            <div>
                <a href="/posts/{{ $post->id }}">詳細画面</a>
            </div>
            <div>
                <a href="/">トップページへ</a>
            </div>
        </body>
 </x-app-layout>