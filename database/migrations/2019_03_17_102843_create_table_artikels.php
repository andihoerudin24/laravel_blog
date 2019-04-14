<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableArtikels extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('table_artikels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->text('body');
            $table->text('gambar');
            $table->unsignedBigInteger('categoris_id');
            $table->foreign('categoris_id')->references('id')->on('table_categoris')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('table_artikels');
    }
}
