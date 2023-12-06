<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class armadaModel extends Model
{
    use HasFactory;
    protected $table = 'tbarmada';
    protected $fillable = ['plat_nomor', 'tgl_kir', 'julukan', 'kelas', 'foto_armada', 'jarak_tempuh', 'kapasitas_kursi', 'nomor_body', 'status', 'tempat_awal', 'tempat_akhir', 'jam_keberangkatan', 'id_driver'];
}
