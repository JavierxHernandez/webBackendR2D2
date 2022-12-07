<?php

use App\Models\Button;
use App\Models\Description;
use App\Models\SubTitleButton;
use App\Models\Title;
use App\Models\TypeSectionLanding;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Description::class)->constrained('descriptions');
            $table->foreignIdFor(Title::class)->constrained('titles');
            $table->foreignIdFor(TypeSectionLanding::class)->constrained('types_sections_landings');
            $table->foreignIdFor(Button::class)->constrained('buttons');
            $table->foreignIdFor(SubTitleButton::class)->constrained('subtitles_buttons');
            $table->string('background_color', 20);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('landings_sections');
    }
};
