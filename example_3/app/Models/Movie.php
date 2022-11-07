<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Episode;
use App\Models\Tag;

class Movie extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'summary'
    ];

    public function episodes() {
        return $this->hasMany(Episode::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
