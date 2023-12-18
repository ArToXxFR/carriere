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
        Schema::create('firings', function (Blueprint $table) {
            $table->id();
            $table->dateTime('horodatage');
            $table->string('explosive', 50);
            $table->smallInteger('tnt_power');
            $table->smallInteger('sound');
            $table->decimal('longitude', 15, 12);
            $table->decimal('latitude', 15, 12);
            $table->decimal('altitude', 5, 3);
            $table->unsignedBigInteger('mine_id');
            $table->foreign('mine_id')->references('id')->on('mines');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('firings');
    }
};
