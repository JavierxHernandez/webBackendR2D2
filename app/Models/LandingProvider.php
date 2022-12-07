<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LandingProvider extends Model
{
    use HasFactory;

    protected $table = "landings_providers";

    public function landing(): BelongsTo
    {
        return $this->belongsTo(Landing::class);
    }

    public function fullLanding()
    {
        return $this->landing()->with(
            [
                'sections.title',
                'sections.description',
                'sections.button',
                'sections.subtitleButton',
                'sections.images'
            ]
        );
    }

    public function productProvider(): BelongsTo
    {
        return $this->belongsTo(ProductProvider::class)->with(
            [
                'product.image',
                'provider',
            ]
        );
    }
}
