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
			$table->increments('id');
            $table->string('nome_professor', 45);
            $table->date('data_admissao');
            $table->date('data_demissao');
            $table->string('tipo', 15);
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
