<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Event;
use App\Models\Venue;
use App\Models\Performer;
use App\Models\Post_like;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->get()]);
    }
    
    public function show(Post $post)
    {
        $nice=Post_like::where('post_id', $post->id)->where('user_id', auth()->user()->id)->first();
        return view('posts.show', compact('post', 'nice'))->with(['post' => $post]);
    }
    
    public function create(Event $event, Venue $venue, Performer $performer)
    {
         return view('posts.create')->with(['events' => $event->get(),'venues' => $venue->get(),'performers' => $performer->get()]);
    }
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $post->user_id=\Auth::id();
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    
    public function edit(Post $post)
    {
        return view('posts.edit')->with(['post' => $post]);
    }
    
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();
    
        return redirect('/posts/' . $post->id);
    }
    public function destroy(Post $post)
    {
        $post->comments()->delete();
        $post->delete();
        return redirect()->route('home')->with('message','投稿を削除しました');
    }
}
