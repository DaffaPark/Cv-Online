<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_alumnis', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('jeniskelamin',['laki-laki','perempuan']);
            $table->enum('jurusan',['RPL','TKJ','MM','DI','FILM','ANIMASI','PEKSOS','KI','TV']);
            $table->string('angkatan');
            $table->string('ttl');
            $table->string('alamat');
            $table->bigInteger('notelp');
            $table->string('email');
            $table->enum('status',['wirausaha','kerja','kuliah']);
            $table->string('pengalamankerja')->nullable();
            $table->string('alamatkerja')->nullable();
            $table->string('sesuai')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('pendapatan')->nullable();
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
        Schema::dropIfExists('data_alumnis');
    }
}
