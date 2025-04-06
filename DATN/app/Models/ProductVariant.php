<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    protected $table = 'product_variants';

    protected $fillable = ['product_id', 'price', 'stock_quantity','sku', 'image_url'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    // public function attributes()
    // {
    //     return $this->belongsToMany(Attribute::class, 'product_variant_attributes')
    //         ->withPivot('attribute_value_id')
    //         ->withTimestamps();
    // }

    public function attributes()
    {
        return $this->hasMany(ProductVariantAttribute::class, 'variant_id');
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
                ? $this->price * (1 - $discount->value / 100)
                : max($this->price - $discount->value, 0);
        }
        return $this->price;
    }

    public function attributeValues()
    {
        return $this->belongsToMany(AttributeValue::class, 'product_variant_attributes', 'variant_id', 'attribute_value_id')
            ->with('attribute'); // Load thêm `attribute`
    }
}
