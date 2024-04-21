<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Post_like;
use Illuminate\Support\Facades\Auth;

class Post_likeController extends Controller
{
    public function nice(Post $post, Request $request)
    {
        $nice=New Post_like();
        $nice->post_id=$post->id;
        $nice->user_id=Auth::user()->id;
        $nice->save();
        return back();
    }
    
    public function unnice(Post $post, Request $request)
    {
        $user=Auth::user()->id;
        $nice=Post_like::where('post_id', $post->id)->where('user_id', $user)->first();
        $nice->delete();
        return back();
    }

}