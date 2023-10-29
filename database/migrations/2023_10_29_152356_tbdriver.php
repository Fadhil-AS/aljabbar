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
        Schema::create('tbdriver', function (Blueprint $table) {
            $table->increments('id_driver');
            $table->string('nama_driver');
            $table->date('tgl_lahir');
            $table->bigInteger('nik');
            $table->bigInteger('nomor_sim');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbdriver');
    }
};
