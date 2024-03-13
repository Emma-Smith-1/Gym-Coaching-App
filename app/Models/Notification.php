<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    public function coaches()
    {
        return $this->belongsTo(Coach::class);
    }

    public function members()
    {
        return $this->belongsTo(Member::class);
    }

    public function posts()
    {
        return $this->belongsTo(Posts::class);
    }

}
