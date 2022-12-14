<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePenelitisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('penelitis', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('no');
            $table->string('nama');
            $table->string('nip');
            $table->string('ttl');
            $table->string('pangkat');
            $table->string('jabatan');
            $table->string('kepakaran');
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
        Schema::dropIfExists('penelitis');
    }
}
