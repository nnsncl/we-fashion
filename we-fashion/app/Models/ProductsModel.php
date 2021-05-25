<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'description', 'price', 'ref'];

    public function category() {
        return $this->belongsTo(CategoryModel::class);
    }

    public function images() {
        return $this->hasOne(ImagesModel::class);
    }
}
