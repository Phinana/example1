<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\item;

class customer extends Model
{
    use HasFactory;

    public function items()
    {
        return $this->belongsTo(item::class);
    }
}
