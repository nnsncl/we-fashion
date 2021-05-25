<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    use HasFactory;

    public function products() {
        return $this->hasMany(Products::class);
    }

    // timestamps with an S.
    public $timestamps = false;
}
