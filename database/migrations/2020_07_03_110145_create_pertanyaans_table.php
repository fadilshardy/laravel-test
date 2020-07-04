<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaans', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('isi');
            // $table->foreignId('user_id');

            // $table->foreign('user_id')
            //     ->references('id')
            //     ->on('users');
            $table->timestamp('tanggal_dibuat')->nullable();
            $table->timestamp('tanggal_diperbaharui')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanyaans');
    }
}
