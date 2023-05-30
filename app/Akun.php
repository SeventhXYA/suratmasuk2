<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    use HasFactory;
    protected $table = 'tb_akun';
    protected $fillable = [
        'user_id', 'username', 'password', 'id_role'
    ];

    public function pegawai()
    {
        return $this->belongsTo(Pegawai::class);
    }
}
