<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;
    protected $table = 'tb_jabatan';
    protected $fillable = [
        'jabatan',
    ];

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }
}
