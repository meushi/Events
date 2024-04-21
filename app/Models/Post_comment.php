<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post_comment extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'body',
        'user_id',
        'post_id',
    ];

    public function getPaginateByPost_comment(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->posts()->with('post_comment')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }
 
    public function post() 
    {
        return $this->belongsTo('App\Models\Post');
    }
    
    public function comment_likes()
    {
        return $this->hasMany(Comment_like::class);
    }
}