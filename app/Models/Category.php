<?php

namespace App\Models;

use App\Traits\QueryScopes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory, QueryScopes;

    protected $table = 'categories';

    protected $fillable = ['name', 'description', 'img_thumbnail'];

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
