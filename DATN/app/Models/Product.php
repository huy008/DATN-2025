<?php

namespace App\Models;

use App\Traits\QueryScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, QueryScopes;

    protected $table = 'products';

    protected $fillable = ['category_id', 'sku', 'name', 'description', 'stock_quantity', 'base_price', 'img_thumbnail', 'type', 'short_description'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function variants()
    {
        return $this->hasMany(ProductVariant::class, 'product_id');
    }

    public function discounts()
    {
        return $this->morphToMany(Discount::class, 'discountable');
    }

    public function getFinalPriceAttribute()
    {
        $discount = $this->discounts()
            ->where('start_date', '<=', now())
            ->where('end_date', '>=', now())
            ->first();

        if ($discount) {
            return $discount->type === 'percentage'
                ? $this->base_price * (1 - $discount->value / 100)
                : max($this->base_price - $discount->value, 0);
        }
        return $this->base_price;
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function getAverageRatingAttribute()
    {
        return round($this->reviews()->avg('rating'), 1);
    }
}
