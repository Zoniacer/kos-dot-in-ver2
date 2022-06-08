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
        Schema::create('kos', function (Blueprint $table) {
            $table->id();
            $table->integer('ownerId');
            $table->string('name');
            $table->string('alamat');
            $table->string('kecamatan');
            $table->string('kota');
            $table->string('provinsi');
            $table->integer('tersedia');
            $table->boolean('ac');
            $table->string('listrik');
            $table->boolean('wifi');
            $table->string('wc');
            $table->string('perabot')->nullable();
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
        Schema::dropIfExists('kos');
    }
};
