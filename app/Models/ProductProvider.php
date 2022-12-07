<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductProvider extends Model
{
    use HasFactory;

    protected $table = "products_providers";


    public function product(): belongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function provider(): belongsTo
    {
        return $this->belongsTo(Provider::class);
    }
}
