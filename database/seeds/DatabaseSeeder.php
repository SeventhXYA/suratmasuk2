<?php

use App\Akun;
use App\Jabatan;
use App\Pegawai;
use App\Role;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Jabatan::create([
            'jabatan' => 'Ajudan II'
        ]);

        Jabatan::create([
            'jabatan' => 'Staff'
        ]);

        Jabatan::create([
            'jabatan' => 'Bupati'
        ]);

        Role::create([
            'role' => 'Ajudan'
        ]);
        Role::create([
            'role' => 'Staff'
        ]);
        Role::create([
            'role' => 'Bupati'
        ]);

        Pegawai::create([
            'foto' => 'user.jpg',
            'nama_pegawai' => 'Rahmat Nor Fahmi',
            'jk' => 'Laki-Laki',
            'tgl_lahir' => '12 Januari 1999',
            'nohp' => '082258898310',
            'email' => 'rahmatnor@gmail.com',
            'npwp' => '8214991375018592',
            'id_jabatan' => 1,
        ]);
        Pegawai::create([
            'foto' => 'user.jpg',
            'nama_pegawai' => 'Erni Nisa Mahmudah',
            'jk' => 'Perempuan',
            'tgl_lahir' => '25 Februari 2002',
            'nohp' => '082248599122',
            'email' => 'ernisa@gmail.com',
            'npwp' => '8214991375883664',
            'id_jabatan' => 2,
        ]);
        Pegawai::create([
            'foto' => 'user.jpg',
            'nama_pegawai' => 'H. Abdul Hadi, S.Ag., M.I.Kom.',
            'jk' => 'Laki-Laki',
            'tgl_lahir' => '18 Maret 1986',
            'nohp' => '082264322476',
            'email' => 'bupatibalangan@gmail.com',
            'npwp' => '8214991375227664',
            'id_jabatan' => 3,
        ]);

        Akun::create([
            'user_id' => 1,
            'username' => 'ajudan',
            'password' => 'ajudan',
            'id_role' => 1,
        ]);
        Akun::create([
            'user_id' => 2,
            'username' => 'staff',
            'password' => 'staff',
            'id_role' => 2,
        ]);
        Akun::create([
            'user_id' => 3,
            'username' => 'bupati',
            'password' => 'bupati',
            'id_role' => 3,
        ]);
    }
}
