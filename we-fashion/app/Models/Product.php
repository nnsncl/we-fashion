<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'size',
        'published',
        'discount',
        'ref',
        'category_id',
        'user_id',
        'image',
        'sizes'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function image() {
        return $this->hasOne(Image::class);
    }

    public function sizes() {
        return $this->belongsToMany(Size::class);
    }

    public $timestamps = false;
}
