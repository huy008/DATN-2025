<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Discountable extends Model
{
    use HasFactory;

    protected $table = 'discountables'; // Tên bảng trung gian

    protected $fillable = [
        'discount_id',
        'discountable_id',
        'discountable_type',
    ];

    /**
     * Quan hệ đa hình (morphTo) giúp liên kết với Product hoặc ProductVariant.
     */
    public function discountable(): MorphTo
    {
        return $this->morphTo();
    }
}
