<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Performer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'body',
    ];

    public function getPaginateByPerformer(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this->posts()->with('performer')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}