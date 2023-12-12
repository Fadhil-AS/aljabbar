<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class keuanganModel extends Model
{
    use HasFactory;
    protected $table = 'tbkeuangan';
    protected $fillable = ['id', 'imageurl', 'header', 'text'];
}
