<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mms', function (Blueprint $table) {
            $table->id();
           $table->string('nis');
            $table->string('name');
            $table->enum('kelas',['X','XI','XII','XIII']);
            $table->enum('jurusan',['RPL','TKJ','MM','DI','FILM','ANIMASI','PEKSOS','KI','TV']);
            $table->string('angkatan');
            $table->string('ttl');
            $table->string('alamat');
            $table->bigInteger('notelp');
            $table->string('email');
            $table->string('nilai');
            $table->string('akademik');
            $table->string('sikap');
            $table->string('keahlian');
            $table->string('pengalaman');
            $table->string('perkembangan');
            $table->string('prestasi');
            $table->string('organisasi');
            $table->enum('status',['murid','alumni']);
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
        Schema::dropIfExists('mms');
    }
}
