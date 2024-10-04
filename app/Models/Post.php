<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title', // Add 'title' here
        // Add other fillable attributes as needed
        'content',
        'user_id',
        'published_at',
    ];
}
