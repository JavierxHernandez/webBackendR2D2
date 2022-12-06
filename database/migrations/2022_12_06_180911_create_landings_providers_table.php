<?php

use App\Models\Landing;
use App\Models\ProductProvider;
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
        Schema::create('landings_providers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Landing::class)->constrained('landings');
            $table->foreignIdFor(ProductProvider::class)->constrained('products_providers');
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('landings_providers');
    }
};
