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
        Schema::create('tbhome', function (Blueprint $table) {
            $table->bigIncrements("id");
            $table->string("imageurl", 256);
            $table->string("header", 256);
            $table->string("text", 256);
            $table->bigInteger("no");
            $table->string("nama_kendaraan", 256);
            $table->string("nama_daerah", 256);
            $table->string("jam_keberangkatan", 256);
            $table->bigInteger("kuota");
            $table->string("stasiun", 256);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbhome');
    }
};