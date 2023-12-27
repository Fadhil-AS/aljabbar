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

class DriverTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    // use RefreshDatabase;

    /** @test */
    public function test_driver_store()
    {
        Storage::fake('public');

        $file = UploadedFile::fake()->image('profile.png');

        $data = [
            'nama_driver' => 'Faris Siddiq Ramdan Putra',
            'email' => 'faris@gmail.com',
            'tgl_lahir' => '2000-12-07',
            'foto_profile' => $file,
            'nik' => '1234567890123456',
            'nomor_sim' => '12345678901234',
        ];

        $response = $this->post(route('post.driver'), $data);

        $response->assertRedirect(route('admin.driver'));

        $this->assertDatabaseHas('tbdriver', [
            'nama_driver' => $data['nama_driver'],
            'email' => $data['email'],
            'tgl_lahir' => $data['tgl_lahir'],
            'nik' => $data['nik'],
            'nomor_sim' => $data['nomor_sim'],
        ]);
        //self::assertFileExists(storage_path('app/public/post-image/' . $file->hashName()));
        Storage::disk('public')->assertExists('post-image/' . $file->hashName());
    }

    public function test_driver_destroy(){
        $driver = driverModel::first();
        $response = $this->delete(route('destroy.driver', ['id' => $driver->id_driver]));
        $response->assertRedirect(route('admin.driver'));

        $this->assertDatabaseMissing('tbdriver', [
            'id_driver' => $driver->id_driver
        ]);

    }
}
