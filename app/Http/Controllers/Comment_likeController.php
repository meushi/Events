<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post_comment;
use App\Models\Comment_like;
use Illuminate\Support\Facades\Auth;

class Comment_likeController extends Controller
{
    public function nice(Post_comment $comment, Request $request)
    {
        $nice=New Comment_like();
        $nice->comment_id=$comment->id;
        $nice->user_id=Auth::user()->id;
        $nice->save();
        return back();
    }
    
    public function unnice(Post_comment $comment, Request $request)
    {
        $user=Auth::user()->id;
        $nice=Comment_like::where('comment_id', $comment->id)->where('user_id', $user)->first();
        $nice->delete();
        return back();
    }

}