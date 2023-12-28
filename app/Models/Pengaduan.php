<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = "pengaduan";
    protected $primaryKey = 'id_pengaduan';
    
    protected $fillable = [
        'nik',
        'jenis_pengaduan',
        'kode_pengaduan',
        'nama',
        'no_telp',
        'email',
        'keterangan',
        'file',
        'status',
        'bukti',
        'peninjauan',
        'confirmed_at',
        'finished_at',
    ];
}
