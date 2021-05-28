<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Front extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'ref',
        'discount',
    ];

    public function images() {
        return $this->hasOne(ImagesModel::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public $timestamps = false;
}
