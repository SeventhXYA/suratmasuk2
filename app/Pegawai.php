<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $table = 'tb_pegawai';
    protected $fillable = [
        'foto', 'nama_pegawai', 'jk', 'tgl_lahir', 'nohp', 'email', 'npwp', 'id_jabatan'
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function akun()
    {
        return $this->hasOne(Akun::class);
    }
}
