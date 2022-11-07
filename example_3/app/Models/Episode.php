<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Episode extends Model
{
    use HasFactory;

    protected $fillable = [
        'movie_id',
        'ep_number',
        'name'
    ];

    public function movie() {
        return $this->belongsTo(Movie::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }
}
