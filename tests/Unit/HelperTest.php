<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\helperModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;

class HelperTest extends TestCase
{
    // use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    // public function test_example(): void
    // {
    //     $this->assertTrue(true);
    // }

    public function testStore(){
        Storage::fake('public');

        $file = uploadedFile::fake()->image('avatar.jpg');

        $dataHelp = [
            'nama_helper' => 'Muhammad Fadhil Ardiansyah Supiyan',
            'email' => 'mfadhilardiansyahs@gmail.com',
            'tgl_lahir' => '2002-12-09',
            'foto_profile' => $file,
            'nik' => '1234567890123456',
        ];

        $response = $this->post(route('post.helper'), $dataHelp);

        $response->assertRedirect(route('admin.helper'));

        $this->assertDatabaseHas('tbhelper',[
            'nama_helper' => $dataHelp['nama_helper'],
            'email' => $dataHelp['email'],
            'tgl_lahir' => $dataHelp['tgl_lahir'],
            'nik' => $dataHelp['nik'],
        ]);

        Storage::disk('public')->assertExists('post-image/' . $file->hashName());
    }

    public function testDestroy(){
        $helper = helperModel::first();
        $response = $this->delete(route('destroy.helper', ['id' => $helper->id_helper]));
        $response->assertRedirect(route('admin.helper'));

        $this->assertDatabaseMissing('tbhelper', [
            'id_helper' => $helper->id_helper
        ]);

    }
}
