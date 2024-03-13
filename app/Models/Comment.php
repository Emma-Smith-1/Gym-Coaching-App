<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function post()
    {
        return $this->belongsTo(Posts::class);
    }
    
    public function coaches()
    {
        return $this->belongsTo(Coach::class);
    }

    public function members()
    {
        return $this->belongsTo(Member::class);
    }
}

