<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbWaliPutraTable extends Migration
{
    public function up()
    {
        Schema::create('tb_wali_putra', function (Blueprint $table) {

		$table->integer('id_wali_putra',10);
		$table->char('nik',16);
		$table->string('nama',128);
		$table->string('pendidikan',3);
		$table->string('pekerjaan',64);
		$table->char('no_telp',12);
		$table->text('alamat');

        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_wali_putra');
    }
}