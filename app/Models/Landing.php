<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Landing extends Model
{
    use HasFactory;
    // use SoftDeletes;

    public function sections(): BelongsToMany
    {
        return $this->belongsToMany(Section::class, 'sections_landigs');
    }

    public function landingProvider(): HasMany
    {
        return $this->hasMany(LandingProvider::class);
    }
}
