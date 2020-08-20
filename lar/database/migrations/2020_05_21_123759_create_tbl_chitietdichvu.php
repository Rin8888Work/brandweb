<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblChitietdichvu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietdichvu', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('id_dv')->unsigned();
          $table->string('name_chitiet');
          $table->string('slug_chitiet');
          $table->integer('price_dv');
          $table->string('content_dv');
          $table->timestamps();
          $table->foreign('id_dv')->references('id')->on('dichvu')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chitietdichvu');
    }
}
