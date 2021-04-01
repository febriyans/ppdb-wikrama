<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegisterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('register', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer("nis");
            $table->text("nama");
            $table->text("jns_kelamin");
            $table->text("tmp_lahir");
            $table->text("tgl_lahir");
            $table->text("alamat");
            $table->text("asal_sekola");
            $table->text("kelas");
            $table->text("jurusan");
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
        Schema::dropIfExists('register');
    }
}
