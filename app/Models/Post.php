<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'body',
        'event_id',
        'venue_id',
        'performer_id'
    ];

    public function getPaginateByLimit(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this::with('post')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

    public function events()
    {
        return $this->belongsTo(Event::class);
    }
    
    public function venues()
    {
        return $this->belongsTo(Venue::class);
    }
    
    public function performers()
    {
        return $this->belongsTo(Performer::class);
    }
    
    public function post_comments()
    {
        return $this->hasMany(Post_comment::class);
    }
    
    public function post_likes()
    {
        return $this->hasMany(Post_like::class);
    }
}