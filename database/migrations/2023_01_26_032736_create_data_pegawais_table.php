<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataPegawaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pegawais', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->bigInteger('user_id');
            $table->string('nama');
            $table->string('unit');
            $table->string('jenis_kelamin');
            $table->date('tgl_masuk');
            $table->string('status_pgw');
            $table->string('kategori_pgw');
            $table->string('masker_hari');
            $table->string('masker_bulan');
            $table->string('masker_tahun');
            $table->string('jenjab');
            $table->string('pendidikan');
            $table->string('job');
            $table->string('posisi');
            $table->date('tgl_msk_unit');
            $table->string('organisasi');
            $table->string('agama');
            $table->string('lokasi');
            $table->string('email');
            $table->softDeletes();
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
        Schema::dropIfExists('data_pegawais');
    }
}
