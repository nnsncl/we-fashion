<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImagesModel extends Model
{
    use HasFactory;

    public function products() {
        return $this->belongsTo(Products::class);
    }

    public $timestamps = false;
}
