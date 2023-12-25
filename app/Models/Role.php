<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = "role";
    protected $primaryKey = 'id_role';
    
    protected $fillable = [
        'nama'
    ];

    public function user()
    {
        return $this->hasMany(User::class, 'id_user');
    }
}
