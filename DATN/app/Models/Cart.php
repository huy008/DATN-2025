<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'product_id',
        'quantity',
        'variant_id',
        'attributes'
    ];

    protected $casts = [
        'attributes' => 'array'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }


    public function variant()
    {
        return $this->belongsTo(ProductVariant::class);
    }

    public function getAttributeColor()
    {
        return AttributeValue::find($this->attributes['color'] ?? null);
    }

    public function getAttributeCapacity()
    {
        return AttributeValue::find($this->attributes['capacity'] ?? null);
    }
}
