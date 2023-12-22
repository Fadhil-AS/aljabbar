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

        DB::table('tbhomekeuangan')->insert([
            [
                'id'=> '1',
                'imageurl' => 'https://images.unsplash.com/photo-1559603108-081ff828517b?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'header' => '',
                'text' => 'Satu platform dan seperangkat teknologi yang terintegrasi, mengelola dan mengembangkan operasional transportasi dan logistik jadi lebih mudah',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '2',
                'imageurl' => 'https://www.mceasy.com/wp-content/uploads/2023/04/otobus-logo-putra-rafflesia.jpg',
                'header' => '',
                'text' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '3',
                'imageurl' => 'https://www.mceasy.com/wp-content/uploads/2023/04/otobus-logo-rosalia-indah.jpg',
                'header' => '',
                'text' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '4',
                'imageurl' => 'https://keretaapikita.com/wp-content/uploads/2020/09/Logo-Baru-PT-KAI.jpg',
                'header' => '',
                'text' => '',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '5',
                'imageurl' => 'https://assets.kompasiana.com/items/album/2016/06/20/transjakarta-new-logo-57681ea11293733e048b45a3.jpeg?t=o&v=1200',
                'header' => 'Pantau Lokasi dan Armada kapanpun dan dimanapun',
                'text' => 'Fitur TBA mempunyai fitur live view untuk menampilkan detail kendaraan dan pengemudi. Mudah dalam memantau armada, antisipasi keterlambatan, dan menjaga kepuasan pelanggan',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '6',
                'imageurl' => 'https://images.unsplash.com/photo-1563986768494-4dee2763ff3f?auto=format&fit=crop&q=80&w=1770&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'header' => 'Efisiensi tinggi, tingkatkan margin perusahaan',
                'text' => 'Fleet Operation mencatat pengeluaran tiap perjalanan, mulai dari bahan bakar hingga uang saku pengemudi. Lindungi perusahaan dari kerugian dengan iFuel Ultrasonic yang memberikan notifikasi ketika terjadi pengurangan BBM secara tiba-tiba.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '7',
                'imageurl' => 'https://images.unsplash.com/photo-1610483576433-9a1108bc9ab6?auto=format&fit=crop&q=80&w=1770&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'header' => 'Jaga kinerja pengemudi, jaga kualitas layanan',
                'text' => 'Driver Behaviour mendeteksi perubahan kecepatan dan perilaku berkendara, seperti rem mendadak atau menikung tajam. Data lalu diolah dan dijadikan penilaian kualitas pengemudi sebagai bahan evaluasi.',
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'id'=> '8',
                'imageurl' => 'https://images.unsplash.com/photo-1606235136180-c08f347a86d8?auto=format&fit=crop&q=80&w=1770&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D',
                'header' => 'Optimasi kapasitas dan waktu kerja armada',
                'text' => 'Armada terjaga prima dengan fitur Vehicle Management yang mengirim notifikasi perawatan berkala bagi kendaraan. Fitur License Reminder juga mengingatkan waktu dokumen kendaraan yang akan jatuh tempo.',
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
