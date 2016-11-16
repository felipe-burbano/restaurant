<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->enum('categoria', [0, 1]);
            $table->date('fecha');
            $table->string('sopa');
            $table->string('arroz');
            $table->string('carnes');
            $table->string('ensalada');
            $table->string('principio');
            $table->string('jugo');
            $table->integer('valor_almuerzo');
            $table->integer('valor_bandeja');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
