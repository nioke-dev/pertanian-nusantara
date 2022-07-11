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
        Schema::create('proses_tanam', function (Blueprint $table) {
            $table->id();
            $table->integer('id_lahan');
            $table->date('tgl_perlakuan');
            $table->integer('umur');            
            $table->string('pola');            
            $table->integer('teknis_perlakuan');            
            $table->integer('dosis');            
            $table->string('foto_dekat');            
            $table->string('foto_jauh');                                    
            $table->integer('kondisi');                                    
            $table->string('keterangan');                                    
            $table->string('komen_admin');                                    
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
        Schema::dropIfExists('proses_tanam');
    }
};
