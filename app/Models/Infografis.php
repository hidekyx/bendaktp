<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Infografis extends Model
{
    protected $table = "infografis";
    protected $primaryKey = 'id_infografis';
    
    protected $fillable = [
        'judul',
        'file',
    ];
}
