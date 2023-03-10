<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $table='tanggapans';
    protected $fillable = [
        'user_id',
        'pengaduan_id',
        'isi_tanggapan',
        'nama_petugas'
    ];

}
