<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SectionLanding extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "sections_landigs";

    protected $fillable = [
        'landing_id',
        'section_id',
        'order_number'
    ];
}
