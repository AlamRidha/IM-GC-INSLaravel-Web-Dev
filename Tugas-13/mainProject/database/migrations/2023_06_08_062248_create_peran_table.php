<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peran', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 45);
            $table->unsignedBigInteger('id_film');
            $table->unsignedBigInteger('id_cast');
            $table->timestamps();
            $table->foreign('id_film')->references('id')->on('film')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('id_cast')->references('id')->on('cast')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('peran');
    }
};
