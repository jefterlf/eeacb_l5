<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFixaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fixa', function(Blueprint $table)
		{
            $table->increments('id');
            $table->string('titulo', 255);
            $table->string('descricao', 255);
            $table->string('usuario',255);
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
		Schema::table('fixa', function(Blueprint $table)
		{
			//
		});
	}

}
