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
        Schema::table('jadwal_tayang', function (Blueprint $table) {
            $table->integer('harga')->after('jam_tayang')->default('40000');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('jadwal_tayang', function (Blueprint $table) {
            $table->dropColumn('harga');
        });
    }
};
