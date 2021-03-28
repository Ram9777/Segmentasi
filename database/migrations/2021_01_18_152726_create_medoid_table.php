<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedoidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medoid', function (Blueprint $table) {
            $table->id();
           // $table->timestamps();
           $table->string('nama_wilayah');
           $table->integer('A');
           $table->integer('B');
           $table->integer('C');
           $table->integer('D');
           $table->integer('E');
           $table->integer('F');
           $table->integer('G');
           $table->integer('H');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medoid');
    }
}
