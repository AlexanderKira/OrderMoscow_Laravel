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
        Schema::create('distances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('region_id');
            //$table->index('region_id');
            $table->unsignedInteger('distance');
            $table->foreign('region_id')->on('regions')->references('region')->onDelete('cascade'); // каскадное удаление
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('distances');
    }
};
