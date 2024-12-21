<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    public function category():BelongsTo{
        return $this->BelongsTo(Post::class, 'category_id');
    }

    public function user():BelongsTo{
        return $this->BelongsTo(Post::class, 'user_id');
    }
}
