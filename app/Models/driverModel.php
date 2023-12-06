<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\armadaModel;

class driverModel extends Model
{
    use HasFactory;
    protected $table = 'tbdriver';
    protected $fillable = ['nama_driver', 'tgl_driver', 'nik', 'id_armada','nomor_sim'];

    // Define the relationship with tbarmada
    public function armada()
    {
        return $this->belongsTo(armadaModel::class, 'id_armada', 'id_armada');
    }
}
