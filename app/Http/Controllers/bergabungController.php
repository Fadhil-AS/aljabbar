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
        // $data = bergabungModel::all();
        // return view('gabung', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = bergabungModel::all();
        return view('gabung', compact('data'));
        // $url = view('gabung');
        // return $url;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectRespons
    {
        $validateData = $request->validate([
            'id_admin' => 'required',
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

        // $inputPass = Input::get('password');
        // $password = Hash::make($inputPass);

        $post = bergabungModel::create($validateData);

        // try {
        //     dd('data berhasil disimpan');
        // } catch (\Exception $e) {
        //     dd('Gagal menyimpan data, pesan error: '. $e->getMessage());
        // }

        return redirect('/bergabung/posts')->with('success', 'Post berhasil dibuat!');
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
