<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guard = ['id'];
    protected $fillable = [
        'p_name',
        'category_id',
        'p_slug',
        'p_details',
        'p_price',
        'p_images',

    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
