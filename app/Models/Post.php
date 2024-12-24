<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $guarded = [];

    public function category(): BelongsTo
    {
        return $this->BelongsTo(Category::class, 'category_id');
    }
    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class, 'user_id');
    }
}
