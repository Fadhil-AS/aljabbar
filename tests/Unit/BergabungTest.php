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


class BergabungTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     */
    public function testStoreGabung(): void
    {
        Storage::fake('public');

        $file = UploadedFile::fake()->image('avatar.jpg');

        $response = $this->post(route('posts.gabung'), [
            'nama_lengkap' => 'Bimo Zachri',
            'email' => 'bimozachri@example.com',
            'password' => 'Autoruns7',
            'nama_pt' => 'MoshiCompany',
            'nama_po' => 'MGI',
            'foto_profil' => $file,
            'jabatan_pekerjaan' => 'CFO',
            'telepon' => '85797250129',
            'jumlah_kendaraan' => '20',
            'jenis_bus' => 'Pariwisata',
            'provinsi' => 'Jawa Barat',
            'alamat' => 'Jl. Selabintana BLK BBAT'
        ]);

        $response->assertRedirect(route('bergabung'));

        $this->assertDatabaseHas('tbadmin', [
            'nama_lengkap' => 'Bimo Zachri',
            'email' => 'bimozachri@example.com',
            'nama_pt' => 'MoshiCompany',
            'nama_po' => 'MGI',
            'jabatan_pekerjaan' => 'CFO',
            'telepon' => '085797250129',
            'jumlah_kendaraan' => '20',
            'jenis_bus' => 'Pariwisata',
            'provinsi' => 'Jawa Barat',
            'alamat' => 'Jl. Selabintana BLK BBAT'
        ]);

        Storage::disk('public')->assertExists('post-image/' . $file->hashName());
    }
}