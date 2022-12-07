<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Section extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'description_id',
        'title_id',
        'type_section_landing',
        'button_id',
        'subtitle_button_id',
        'background_color'
    ];


    public function description(): BelongsTo
    {
        return $this->belongsTo(Description::class);
    }

    public function title(): BelongsTo
    {
        return $this->belongsTo(Title::class);
    }

    public function button(): BelongsTo
    {
        return $this->belongsTo(Button::class);
    }

    public function subtitleButton(): BelongsTo
    {
        return $this->belongsTo(SubTitleButton::class);
    }

    public function images(): BelongsToMany
    {
        return $this->belongsToMany(Image::class, 'images_sections');
    }
}
