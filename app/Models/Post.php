<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'user_id',
        'event_id',
        'venue_id',
        'performer_id'
    ];

    public function getPaginateByLimit(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this::with('event', 'venue', 'performer')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function event()
    {
        return $this->belongsTo(Event::class);
    }
    
    public function venue()
    {
        return $this->belongsTo(Venue::class);
    }
    
    public function performer()
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