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
        'ref',
        'discount',
        'gender'
    ];

    public function images() {
        return $this->hasOne(ImagesModel::class);
    }

    public $timestamps = false;
}
