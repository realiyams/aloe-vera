<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAloeVerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aloe_veras', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('jumlahDaun');
            $table->string('warnaDaun');
            $table->string('kondisiDaun');
            $table->unsignedInteger('jumlahTunas');
            $table->string('image_path');
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aloe_veras');
    }
}
