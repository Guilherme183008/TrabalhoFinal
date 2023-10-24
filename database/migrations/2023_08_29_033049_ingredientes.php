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
        Schema::create('ingredientes', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->double('quantidade_kg')->nullable();
            $table->int('quantidade_un')->nullable();
            $table->double('valor');
            $table->double('quantidade_min');
            $table->double('quantidade_max');
            $table->timestamps();

            $table->foreign('tipos_id')->references('id')->on('tipos_ingredientes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ingredientes');
    }
};
