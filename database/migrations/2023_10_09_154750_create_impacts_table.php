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
        Schema::create('impacts', function (Blueprint $table) {
            $table->id();
            $table->enum('ecosystem', ['faune', 'flore', 'eau']);
            $table->date('horodatage');
            $table->integer('quality');
            $table->unsignedBigInteger('idMine');
            $table->foreign('idMine')->references('id')->on('mines');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('impacts');
    }
};
