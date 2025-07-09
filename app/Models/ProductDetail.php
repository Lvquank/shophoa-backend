<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductDetail extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = ['product_id', 'image', 'title', 'description'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
