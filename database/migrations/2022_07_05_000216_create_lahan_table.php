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
        Schema::create('lahan', function (Blueprint $table) {
            $table->id();
            $table->char('id_user', 8);
            $table->integer('luas');
            $table->integer('type');
            $table->string('latitude');
            $table->string('longitude');
            $table->string('varieteas');
            $table->double('jumlah_bibit');
            $table->date('tgl_tanam');
            $table->date('teknik');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('produksi');            
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
        Schema::dropIfExists('lahan');
    }
};
