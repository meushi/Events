<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; 
use App\Models\Post_comment; 

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
    
    public function destroy(Post_comment $comment)
    {
        $comment->delete();
        return back();
    }
}