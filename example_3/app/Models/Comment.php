<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Episode;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'episode_id',
        'title',
        'content'
    ];

    public function episode() {
        return $this->belongsTo(Episode::class);
    }
}
