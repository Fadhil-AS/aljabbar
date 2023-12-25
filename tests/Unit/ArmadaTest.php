<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\armadaModel;
use App\Models\driverModel;
use App\Models\helperModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class ArmadaTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function testStoreArmada(){
        Storage::fake('public');

        $file = uploadedFile::fake()->image('avatar.jpg');

        $response = $this->post(route('post.armada'),[
            'plat_depan' => 'D',
            'nomor_plat' => '7757',
            'plat_belakang' => 'TL',
            'tgl_kir' => '2020-11-10',
            'julukan' => 'Abatasa',
            'kelas' => 'VIP',
            'foto_armada' => $file,
            'jarak_tempuh' => '100000',
            'kapasitas_kursi' => '30',
            'nomor_body' => 'V001',
            'status' => 'Perpal',
            'tempat_awal' => 'Jakarta',
            'tempat_akhir' => 'Bandung',
            'jam_keberangkatan' => '10:00',
            'tanggal_keberangkatan' => '2023-12-25',
            'id_driver' => '1',
            'id_helper' => '1'
        ]);

        $response->assertRedirect(route('admin.armada'));

        $this->assertDatabaseHas('tbarmada',[
            'plat_depan' => 'D',
            'nomor_plat' => '7757',
            'plat_belakang' => 'TL',
            'tgl_kir' => '2020-11-10',
            'julukan' => 'Abatasa',
            'kelas' => 'VIP',
            'jarak_tempuh' => '100000',
            'kapasitas_kursi' => '30',
            'nomor_body' => 'V001',
            'status' => 'Perpal',
            'tempat_awal' => 'Jakarta',
            'tempat_akhir' => 'Bandung',
            'jam_keberangkatan' => '10:00:00',
            'tanggal_keberangkatan' => '2023-12-25',
            'id_driver' => '1',
            'id_helper' => '1'
        ]);

        Storage::disk('public')->assertExists('post-image/' . $file->hashName());
    }

    public function testShowArmada()
    {
        // Assuming you already have existing data for armada, driver, and helper
        $armada = armadaModel::first();
        $driver = driverModel::first();
        $helper = helperModel::first();

        // Hit the show endpoint with existing data
        $response = $this->get(route('detail.armada', ['id' => $armada->id_armada]));

        // Assert response status code
        $response->assertStatus(200);

        // Assert that the response view has the necessary data
        $response->assertViewHas('dataArm', function ($dataArm) use ($armada) {
            return $dataArm->id_armada === $armada->id_armada;
        });

        $response->assertViewHas('dataDrv', function ($dataDrv) use ($driver) {
            return $dataDrv->id_driver === $driver->id_driver;
        });

        $response->assertViewHas('dataHlp', function ($dataHlp) use ($helper) {
            return $dataHlp->id_helper === $helper->id_helper;
        });
    }
}