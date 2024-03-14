<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    public function coaches()
    {
        return $this->belongsTo(Coach::class);
    }

    public function comments()
    {
        return $this->belongsTo(Comment::class);
    }

}
