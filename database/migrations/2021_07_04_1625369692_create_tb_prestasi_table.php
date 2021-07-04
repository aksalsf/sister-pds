<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbPrestasiTable extends Migration
{
    public function up()
    {
        Schema::create('tb_prestasi', function (Blueprint $table) {

		$table->integer('id_prestasi',10);
		$table->integer('id_siswa',10);
		$table->string('deskripsi');
		$table->string('jenis',16);
		$table->string('tingkat',16);
		$table->integer('tahun',4);

        });
    }

    public function down()
    {
        Schema::dropIfExists('tb_prestasi');
    }
}