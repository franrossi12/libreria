<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_cliente')->unsigned();
            $table->integer('id_libro')->unsigned();
            $table->integer('monto')->unsigned();
            $table->timestamps();

            //Cliente
            $table->foreign('id_cliente')
                ->references('id')
                ->on('usuarios');

            //Libro
            $table->foreign('id_libro')
                ->references('id')
                ->on('libros');
            $table->foreign('monto')
                ->references('precio')
                ->on('libros');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ventas');
    }
}
