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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->char('id_user', 8);
            $table->string('nm_user');
            $table->string('nik')->unique();
            $table->boolean('jns_kelamin')->nullable();
            $table->date('tgl_lahir');
            $table->string('no_hp');
            $table->string('password')->nullable();
            $table->string('jalan')->nullable();
            $table->string('desa')->nullable();
            $table->string('kec')->nullable();
            $table->string('kab')->nullable();
            $table->string('prop')->nullable();
            $table->string('foto_diri')->nullable();
            $table->rememberToken();
            $table->timestamps();

            // $table->id();
            // $table->string('name');
            // $table->string('nik')->unique();
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
