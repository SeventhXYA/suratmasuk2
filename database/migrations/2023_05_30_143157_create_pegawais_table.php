<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('foto')->nullable();
            $table->string('nama_pegawai', 100);
            $table->string('jk', 20);
            $table->string('tgl_lahir');
            $table->string('nohp', 15);
            $table->string('email', 100)->unique();
            $table->string('npwp', 16);
            $table->foreignId('id_jabatan')->constrained('tb_jabatan')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_pegawai');
    }
}
