<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFichasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fichas', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('titulo', 255);
            $table->string('descricao', 255);
            $table->string('usuario',255);
            $table->boolean('tipo');
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

            Schema::drop('fichas');

	}

}
