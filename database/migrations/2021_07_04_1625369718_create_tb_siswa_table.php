<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbSiswaTable extends Migration
{
    public function up()
    {
        Schema::create('tb_siswa', function (Blueprint $table) {

		$table->integer('id_siswa',10);
		$table->char('nisn',10);
		$table->char('nik',16);
		$table->char('no_kk',16);
		$table->string('nama_lengkap',128);
		$table->string('tempat_lahir',128);
		$table->date('tanggal_lahir');
		$table->char('jenis_kelamin',2);
		$table->integer('anak_ke',2);
		$table->integer('jumlah_saudara',2);
		$table->integer('id_ayah',10);
		$table->integer('id_ibu',10);
		$table->integer('id_wali',10);
		$table->string('agama',16);
		$table->text('alamat');
		$table->char('no_telp',12);
		$table->string('surel',128);
		$table->string('foto');
		$table->string('sekolah_asal');

        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_siswa');
    }
}