<?php

use App\Models\Product;
use App\Models\Provider;
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
        Schema::create('products_providers', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Provider::class)->constrained('providers');
            $table->foreignIdFor(Product::class)->constrained('products');
            $table->string('term_and_condition_url');
            $table->string('subscription_url');
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
        Schema::dropIfExists('products_providers');
    }
};
