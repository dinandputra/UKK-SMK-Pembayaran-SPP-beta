<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id('nisn')->primaryKey();
            $table->char('nis');
            $table->string('nama');
            $table->unsignedBigInteger('id_kelas');
            $table->text('alamat');
            $table->string('no_telp');
            $table->unsignedBigInteger('id_spp');
            $table->timestamps();

            $table->foreign('id_spp')->references('id_spp')->on('spps')->onDelete('cascade');
            $table->foreign('id_kelas')->references('id_kelas')->on('kelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswas');
    }
};
