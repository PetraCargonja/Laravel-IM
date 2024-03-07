<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::table('zanr')->insert([
            ['naziv' => 'Akcija'],
            ['naziv' => 'Avantura'],
            ['naziv' => 'Biografija'],
            ['naziv' => 'Dokumentarni'],
            ['naziv' => 'Drama'],
            ['naziv' => 'Fantazija'],
            ['naziv' => 'Horor'],
            ['naziv' => 'Komedija'],
            ['naziv' => 'Krimi'],
            ['naziv' => 'Misterija'],
            ['naziv' => 'Mjuzikl'],
            ['naziv' => 'Naučna fantastika'],
            ['naziv' => 'Ratni'],
            ['naziv' => 'Romansa'],
            ['naziv' => 'Triler'],
            ['naziv' => 'Vestern'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('zanr')->delete();
    }
};
