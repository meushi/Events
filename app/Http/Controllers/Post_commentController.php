<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; 
use App\Models\Post_comment; 
use App\Models\Comment_like;

class Post_commentController extends Controller
{
    public function store(Request $request, Post_comment $comment)
    {
        $inputs = request()->validate([
            'body' => 'required|max:255'
        ]);

        $comment->create([
            'body' => $request->body,
            'user_id' => auth()->user()->id,
            'post_id' => $request->post_id
        ]);

        return back();
    }
    
    public function show(Post_comment $comment)
    {  
 
        $nice=Comment_like::where('comment_id', $comment->id)->where('user_id', auth()->user()->id)->first();
        return view('post.show', compact('comment', 'nice'))->with(['comments' => $comments]);
    }
    
    public function destroy(Post_comment $comment)
    {
        $comment->delete();
        return back();
    }
}