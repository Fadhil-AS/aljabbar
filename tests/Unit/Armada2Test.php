<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;

use App\Models\armadaModel;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\helperModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use App\Models\bergabungModel;
use App\Models\driverModel;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Collection;

class Armada2Test extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testShowDriver()
    {
        // Assuming you already have existing data for armada, driver, and helper
        $driver = driverModel::first();

        // Hit the show endpoint with existing data
        $response = $this->get(route('detail.driver', ['id' => $driver->id_driver]));

        // Assert response status code
        $response->assertStatus(200);

        // Assert that the response view has the necessary data
        $response->assertViewHas('dataDrv', function ($dataDrv) use ($driver) {
            return $dataDrv->id_driver === $driver->id_driver;
        });
    }

    public function testDestroy(){
        $armada = armadaModel::first();
        $response = $this->delete(route('destroy.armada', ['id' => $armada->id_armada]));
        $response->assertRedirect(route('admin.armada'));

        $this->assertDatabaseMissing('tbarmada', [
            'id_armada' => $armada->id_armada
        ]);

    }

    
}
