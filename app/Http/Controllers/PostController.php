<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Models\Event;
use App\Models\Venue;
use App\Models\Performer;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts.index')->with(['posts' => $post->get()]);
    }
    
    public function show(Post $post)
    {
        return view('posts.show')->with(['post' => $post]);
    }
    
    public function create(Event $event)
    {
         return view('posts.create')->with(['events' => $event->get()]);
         return view('posts.create')->with(['venues' => $venue->get()]);
         return view('posts.create')->with(['performers' => $performer->get()]);
    }
    
    public function store(Request $request, Post $post)
    {
        $input = $request['post'];
        $post->fill($input_post)->save();
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
}
