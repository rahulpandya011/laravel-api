<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_variation', function (Blueprint $table) {
            $table->bigIncrements('product_variation_id');

            $table->bigInteger('product_id')->unsigned();
            $table->foreign('product_id')->references('product_id')
                ->constrained()->on('products')->onDelete('cascade');


            $table->bigInteger('attributes_variation_id')->unsigned();
            $table->foreign('attributes_variation_id')->references('attributes_variation_id')
                ->constrained()->on('attributes_variation')->onDelete('cascade');

            $table->bigInteger('created_by')->nullable();
            $table->bigInteger('updated_by')->nullable();
            $table->timestamp('created_at');
            $table->timestamp('updated_at')->useCurrent();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_variation');
    }
};
