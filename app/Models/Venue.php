<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'body',
    ];

    public function getPaginateByVenue(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->posts()->with('venue')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}