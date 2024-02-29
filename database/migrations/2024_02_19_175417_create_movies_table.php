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
        Schema::create('zanr', function (Blueprint $table) {
            $table->id('id_zanr');
            $table->string('naziv')->nullable(false);
        });

        Schema::create('film', function (Blueprint $table) {
            $table->id('id_film');
            $table->string('naziv')->nullable(false);
            $table->year('godina')->nullable(false);

            $table->foreignId('id_zanr')->nullable(true)->constrained('zanr', 'id_zanr');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film');
    }
};
