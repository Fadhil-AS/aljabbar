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

        DB::table('tbhome')->insert([
            [
                'imageurl' => 'https://images.unsplash.com/photo-1559603108-081ff828517b?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'header' => '',
                'text' => 'Satu platform dan seperangkat teknologi yang terintegrasi, mengelola dan mengembangkan operasional transportasi dan logistik jadi lebih mudah',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => null,
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'imageurl' => 'https://www.mceasy.com/wp-content/uploads/2023/04/otobus-logo-putra-rafflesia.jpg',
                'header' => '',
                'text' => '',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => null,
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'imageurl' => 'https://www.mceasy.com/wp-content/uploads/2023/04/otobus-logo-rosalia-indah.jpg',
                'header' => '',
                'text' => '',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => null,
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'imageurl' => 'https://keretaapikita.com/wp-content/uploads/2020/09/Logo-Baru-PT-KAI.jpg',
                'header' => '',
                'text' => '',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => null,
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'imageurl' => 'https://assets.kompasiana.com/items/album/2016/06/20/transjakarta-new-logo-57681ea11293733e048b45a3.jpeg?t=o&v=1200',
                'header' => '',
                'text' => '',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => null,
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'imageurl' => 'https://awsimages.detik.net.id/content/2009/07/23/4/Garuda-Logo-Vertical-dalam.jpg',
                'header' => '',
                'text' => '',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => null,
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'imageurl' => 'https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/294/2023/10/03/Logo-Whoosh-1902335397.jpg',
                'header' => '',
                'text' => '',
                'no' => null,
                'nama_kendaraan' => '',
                'nama_daerah' => '',
                'jam_keberangkatan' => null,
                'kuota' => null,
                'stasiun' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbhome');
    }
};
