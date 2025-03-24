<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PostCategory extends Model
{
    use HasFactory;

    protected $table = 'post_categories'; // Tên bảng

    public $timestamps = false; // Không có cột timestamps

    protected $fillable = [
        'post_id',
        'category_id',
    ];

    /**
     * Mối quan hệ với Post
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }

    /**
     * Mối quan hệ với Category
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
