<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDosensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('md_dosen', function (Blueprint $table) {
            $table->id();
            $table->char('nik', 8);
            $table->char('nip', 8)->unique();
            $table->string('nama_lengkap');
            $table->string('email');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('tlp');
            $table->boolean('status_kepegawaian')->default(0);
            $table->string('pengampu');
            $table->string('photo')->default('noimage.jpg');
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
        Schema::dropIfExists('md_dosen');
    }
}
