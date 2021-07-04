<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbWaliPutriTable extends Migration
{
    public function up()
    {
        Schema::create('tb_wali_putri', function (Blueprint $table) {

		$table->integer('id_wali_putri',10);
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
        Schema::dropIfExists('tb_wali_putri');
    }
}