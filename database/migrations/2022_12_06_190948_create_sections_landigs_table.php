<?php

use App\Models\Landing;
use App\Models\Section;
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
        Schema::create('sections_landigs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Landing::class)->constrained('landings');
            $table->foreignIdFor(Section::class)->constrained('sections');
            $table->integer('order_number', false, true)->nullable();
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
        Schema::dropIfExists('sections_landigs');
    }
};
