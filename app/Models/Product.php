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
        'p_slug',
        'p_category',
        'p_details',
        'p_price',
        'p_images',

    ];
}
