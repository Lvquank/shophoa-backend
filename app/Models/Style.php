<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Style extends Model
{
    use HasFactory;

    /**
     * Tên bảng được liên kết với model.
     *
     * @var string
     */
    protected $table = 'styles';

    /**
     * Các thuộc tính có thể được gán hàng loạt.
     *
     * @var array<int, string>
     */
    protected $fillable = [];

    /**
     * Lấy category (danh mục) mà Style này thuộc về.
     *
     * Đây là mối quan hệ ngược lại của 'hasMany' trong model Category.
     */
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_style');
    }

    /**
     * Lấy tất cả các product (sản phẩm) có Style này.
     */
    public function products(): HasMany
    {
        // Một Style có thể có nhiều Products.
        return $this->hasMany(Product::class, 'style_id', 'id');
    }
}
