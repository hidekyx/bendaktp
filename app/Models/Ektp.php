<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ektp extends Model
{
    protected $table = "ektp";
    protected $primaryKey = 'id_ektp';
    
    protected $fillable = [
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'gol_darah',
        'alamat',
        'agama',
        'status_perkawinan',
        'pekerjaan',
        'kewarganegaraan',
        'status',
        'processed_at',
        'printed_at',
        'retrieved_at',
    ];
}
