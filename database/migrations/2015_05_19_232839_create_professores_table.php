<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfessoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('professores', function(Blueprint $table)
		{
			$table->increments('id_Professor');
            $table->string('nome', 50);
            $table->date('data_demissao');
            $table->date('data_admissao');
            $table->string('tipo', 50);

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('professores');
	}

}
