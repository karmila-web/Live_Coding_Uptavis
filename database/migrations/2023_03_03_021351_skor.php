<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    
    public function up()
    {
        Schema::create('data_skors', function (Blueprint $table) {
            $table->id();
            $table->string('klub1');
            $table->string('skor_klub1');
            $table->string('klub2');
            $table->string('skor_klub2');
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
        //
    }
};
