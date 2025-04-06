<?php

namespace App\Models;

use App\Traits\QueryScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Discount extends Model
{
    use HasFactory, QueryScopes;

    protected $table = 'discounts'; // Tên bảng

    protected $fillable = [
        'name',
        'description',
        'type',
        'value',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'value' => 'decimal:2',
    ];

    /**
     * Kiểm tra giảm giá có đang hoạt động không.
     */
    public function isActive(): bool
    {
        $now = Carbon::now();
        return $this->start_date <= $now && $this->end_date >= $now;
    }

    /**
     * Format kiểu giảm giá
     */
    protected function type(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $value === 'fixed' ? 'Giảm giá cố định' : 'Giảm giá theo phần trăm',
        );
    }

    public function products(): MorphToMany
    {
        return $this->morphedByMany(Product::class, 'discountable');
    }

    public function variants(): MorphToMany
    {
        return $this->morphedByMany(ProductVariant::class, 'discountable');
    }
}
