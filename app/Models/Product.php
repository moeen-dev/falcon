<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     * 
     * @var arry<int, string>
     */
    protected $fillable = [
        'title',
        'slug',
        'sub_category_id',
        'off_price',
        'current_price',
        'normal_price',
        'image1',
        'image2',
        'image3',
        'image4',
        'is_stock',
        'information',
        'details',
    ];

    public function subcategory()
    {
        return $this->belongsTo('App\Models\SubCategory', 'sub_category_id');
    }
}
