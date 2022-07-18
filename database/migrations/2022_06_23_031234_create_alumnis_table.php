<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
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
            $table->enum('sesuai',['iya','tidak'])->nullable();
            $table->string('jabatan')->nullable();
            $table->enum('pendapatan',['dibawah_1juta','diatas_1juta','diatas_2juta'])->nullable();
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
        Schema::dropIfExists('alumnis');
    }
}
