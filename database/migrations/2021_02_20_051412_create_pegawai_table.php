<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->string('pegawai_nm', 255);
            $table->string('jk', 1);
            $table->string('agama', 255);
            $table->string('tmp_lahir');
            $table->date('tgl_lahir');
            $table->text('alamat');
            $table->string('jabatan', 255);
            $table->string('devisi', 255);
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
        Schema::dropIfExists('pegawai');
    }
}
