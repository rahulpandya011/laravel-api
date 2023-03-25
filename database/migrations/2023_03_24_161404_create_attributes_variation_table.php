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
        Schema::create('attributes_variation', function (Blueprint $table) {
            $table->bigIncrements('attributes_variation_id');

            $table->bigInteger('attribute_id')->unsigned();
            $table->foreign('attribute_id')->references('attribute_id')
                ->constrained()->on('attributes')->onDelete('cascade');

            $table->string('name', 50);
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
        Schema::dropIfExists('attributes_variation');
    }
};
