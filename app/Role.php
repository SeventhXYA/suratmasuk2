<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $table = 'tb_role';
    protected $fillable = [
        'role',
    ];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}
