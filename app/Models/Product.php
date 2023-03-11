<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        "name",
        "value",
        "description",
        "link_to_image",
    ];

    use HasFactory;
}
