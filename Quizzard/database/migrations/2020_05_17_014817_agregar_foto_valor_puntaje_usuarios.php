<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarFotoValorPuntajeUsuarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('puntaje')->nullable()->after('password');
            $table->enum('rol', ['admin', 'user'])->default('user')->after('puntaje');
            $table->string('fotoperfil')->after('rol');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('puntaje');
            $table->dropColumn('rol');
            $table->dropColumn('fotoperfil');
        });
    }
}
