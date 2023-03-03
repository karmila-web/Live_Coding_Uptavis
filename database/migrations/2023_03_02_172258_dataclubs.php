<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('data_clubs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_klub');
            $table->string('kota_klub');
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
};
