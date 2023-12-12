<?php

namespace App\Http\Controllers;

use App\Models\keuanganModel;
use Illuminate\Http\Request;

class keuanganController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function indexKeuangan(){
        $datakeuangan = keuanganModel::all();
        return view('keuangan', compact("datakeuangan"));
    }
}

