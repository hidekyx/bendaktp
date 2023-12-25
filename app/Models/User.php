<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = "user";
    protected $primaryKey = 'id_user';
    protected $hidden = ['password'];
    
    protected $fillable = [
        'email',
        'no_telp',
        'nama',
        'alamat',
        'active',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class, 'id_role');
    }
}
