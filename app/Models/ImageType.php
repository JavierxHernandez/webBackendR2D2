<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageType extends Model
{
    use HasFactory;

    protected $table = "images_types";

    protected $fillable = [
        'name'
    ];

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
