<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHasilIterasiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hasil_iterasi', function (Blueprint $table) {
            $table->id();
            $table->integer('iterasi');
            $table->double('total_medoids');
            $table->double('total_non_medoids');
            $table->double('selisih');
           // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hasil_iterasi');
    }
}
