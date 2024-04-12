<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth; 
use App\Models\Post_comment; 

class Post_commentController extends Controller
{
    public function store(Request $request)
    {
        $inputs = request()->validate([
            'body' => 'required|max:255'
        ]);

        $comment = Post_comment::create([
            'body' => $inputs['body'],
            'user_id' => auth()->user()->id,
            'post_id' => $request->post_id
        ]);

        return back();
    }
}