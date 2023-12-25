<?php

namespace Tests\Unit;

use App\Http\Controllers\armadaController;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use App\Models\armadaModel;
use App\Models\driverModel;
use App\Models\helperModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;


class Armada2Test extends TestCase
{
    /**
     * A basic test example.
     */
    public function testEditArmada(){
        // Mock the armadaModel, driverModel, and helperModel
        $armadaModelMock = $this->getMockBuilder(armadaModel::class)
            ->onlyMethods(['with', 'find']) // Corrected: Remove 'find' if it doesn't exist
            ->getMock();

        $driverModelMock = $this->getMockBuilder(driverModel::class)
            ->onlyMethods(['all'])
            ->getMock();

        $helperModelMock = $this->getMockBuilder(helperModel::class)
            ->onlyMethods(['all'])
            ->getMock();

        // Assume $id exists for testing purposes
        $id = 1;

        // Mock the data returned by the models
        $dataArmMock = new \stdClass();
        $dataDrvMock = [/* Mocked driver data */];
        $dataHlpMock = [/* Mocked helper data */];

        // Set up expectations for the method calls
        $armadaModelMock->expects($this->once())
            ->method('with')
            ->with(['driver', 'helper', 'keuangan'])
            ->willReturnSelf();

        $armadaModelMock->expects($this->once())
            ->method('find')
            ->with($id)
            ->willReturn($dataArmMock);

        $driverModelMock->expects($this->once())
            ->method('all')
            ->willReturn($dataDrvMock);

        $helperModelMock->expects($this->once())
            ->method('all')
            ->willReturn($dataHlpMock);

        // Create an instance of the controller with mocked models
        $controller = new armadaController($armadaModelMock, $driverModelMock, $helperModelMock);

        // Call the edit function with the mocked models
        $response = $controller->edit($id);

        // Assertions
        $this->assertEquals(view('admin.crud.armada.editArmada', ['dataArm' => $dataArmMock, 'dataDrv' => $dataDrvMock, 'dataHlp' => $dataHlpMock]), $response);


    }

    public function testDestroyArmada()
    {
        // Mock the armadaModel and File
        $armadaModelMock = $this->getMockBuilder(armadaModel::class)
            ->onlyMethods(['with', 'where', 'first', 'destroy']) // Corrected: Remove 'where' if it doesn't exist
            ->getMock();

        $fileMock = $this->getMockBuilder(File::class)
            ->onlyMethods(['exists', 'unlink'])
            ->getMock();

        // Assume $id exists for testing purposes
        $id = 1;

        // Mock the data returned by the model
        $dataArmMock = new \stdClass();
        $dataArmMock->id_armada = $id;
        $dataArmMock->foto_armada = 'example.jpg';

        // Set up expectations for the method calls
        $armadaModelMock->expects($this->once())
            ->method('with')
            ->with(['driver', 'helper'])
            ->willReturnSelf();

        $armadaModelMock->expects($this->once())
            ->method('where')
            ->with('id_armada', $id)
            ->willReturnSelf();

        $armadaModelMock->expects($this->once())
            ->method('first')
            ->willReturn($dataArmMock);

        $fileMock->expects($this->once())
            ->method('exists')
            ->willReturn(true);

        $fileMock->expects($this->once())
            ->method('unlink')
            ->with(\public_path('storage/example.jpg'));

        $armadaModelMock->expects($this->once())
            ->method('destroy')
            ->with($id);

        // Create an instance of the controller with mocked models
        $controller = new armadaController($armadaModelMock, null, null, $fileMock);

        // Call the destroy function with the mocked models
        $response = $controller->destroy($id);

        // Assertions
        $this->assertInstanceOf(armadaController::class, $response);
        $this->assertEquals(route('admin.armada'), $response->getTargetUrl());
    }
}