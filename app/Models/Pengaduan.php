<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
   protected $table='pengaduans';
    protected $fillable = [
        'user_id',
        'tgl_pengaduan',
        'jdl_pengaduan',
        'isi_laporan',
        'foto',
        'status',
    ];
    public function user(){
        return $this->belongsTo('App\Models\User','user_id');
    }

}
