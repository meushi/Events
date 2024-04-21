<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment_like extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'comment_id',
    ];

    public function getPaginateByComment_like(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->comments()->with('comment_like')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function user() 
    {
        return $this->belongsTo('App\Models\User');
    }
 
    public function post_comment() 
    {
        return $this->belongsTo('App\Models\Post_comment');
    }
}