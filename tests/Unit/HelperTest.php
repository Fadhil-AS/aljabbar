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
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_example(): void
    {
        $this->assertTrue(true);
    }

    // public function testCreateHelper(){
    //     $helper = helperModel::factory()->create();;

    //     $response = $this->actingAs($helper)->json('POST','/admin/helper/posts', [
    //         '_token' => csrf_token(),
    //         'nama_helper' => 'Muhammad Fadhil Ardiansyah Supiyan',
    //         'email' => 'mfadhilardiansyahs@example.com',
    //         'tgl_lahir' => '2002-09-12',
    //         'foto_profile' => '3SkaS2RSdYy9qRVpcfWuivHqWqMPLZqDWkoDRdoe.png',
    //         'nik' => '1',
    //     ]);

    //     $response->assertStatus(201);
    //     $this->assertDatabaseHas('tbhelper', ['nama_helper' => 'Muhammad Fadhil Ardiansyah Supiyan']);
    // }

    public function testStore(){
        Storage::fake('public');

        $file = uploadedFile::fake()->image('avatar.jpg');

        $response = $this->post(route('post.helper'),[
            'nama_helper' => 'Muhammad Fadhil Ardiansyah Supiyan',
            'email' => 'mfadhilardiansyahs@example.com',
            'tgl_lahir' => '2002-12-09',
            'foto_profile' => $file,
            'nik' => '1234567890123456',
        ]);

        $response->assertRedirect(route('admin.helper'));

        $this->assertDatabaseHas('tbhelper',[
            'nama_helper' => 'Muhammad Fadhil Ardiansyah Supiyan',
            'email' => 'mfadhilardiansyahs@example.com',
            'tgl_lahir' => '2002-12-09',
            'nik' => '1234567890123456',
        ]);

        Storage::disk('public')->assertExists('post-image/' . $file->hashName());
    }
}
