<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_suratmasuk', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('tb_pegawai')->onUpdate('cascade')->onDelete('cascade');
            $table->string('pengirim');
            $table->string('no_surat');
            $table->string('tgl_surat');
            $table->string('tgl_masuk');
            $table->text('perihal');
            $table->string('bidang');
            $table->string('kategori');
            $table->string('status');
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
        Schema::dropIfExists('tb_suratmasuk');
    }
}
