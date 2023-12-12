<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\armadaModel;
use App\Models\helperModel;
use App\Models\driverModel;

class berandaController extends Controller
{
    public function index()
    {
        $dataArm = armadaModel::with(['helper', 'driver'])->get();
        $dataDrv = driverModel::all();
        $dataHlp = helperModel::all();

        return view('admin.beranda', compact('dataArm', 'dataDrv', 'dataHlp' ));
    }
}
