<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bergabungModel extends Model
{
    use HasFactory;
    protected $table = 'tbadmin';
    protected $fillable = ['nama_lengkap', 'email', 'password', 'nama_perusahaan', 'jabatan_pekerjaan', 'telepon',
    'jumlah_kendaraan', 'jenis_bus', 'provinsi', 'alamat'];

    // public function setPasswordAttribute($password){
    //     $this->attributes['password'] = Hash::make($password);
    // }
}
