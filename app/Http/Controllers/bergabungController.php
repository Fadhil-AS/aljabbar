<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bergabungModel;
use Illuminate\Support\Facades\Hash;

class bergabungController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = bergabungModel::all();
        return view('gabung', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required',
            'nama_perusahaan' => 'required|string|max:255',
            'jabatan_pekerjaan' => 'required|string|max:255',
            'telepon' => 'required',
            'jumlah_kendaraan' => 'required',
            'jenis_bus' => 'required',
            'provinsi' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
        ]);

        $bergabung = new bergabungModel([
            'nama_lengkap' => $request->input('nama_lengkap'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
            'nama_perusahaan' => $request->input('nama_perusahaan'),
            'jabatan_pekerjaan' => $request->input('jabatan_pekerjaan'),
            'telepon' => $request->input('telepon'),
            'jumlah_kendaraan' => $request->input('jumlah_kendaraan'),
            'jenis_bus' => $request->input('jenis_bus'),
            'provinsi' => $request->input('provinsi'),
            'alamat' => $request->input('alamat'),
        ]);

        $bergabung->save();

        return redirect()->route('bergabung');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
