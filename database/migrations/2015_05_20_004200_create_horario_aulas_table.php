<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorarioAulasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('horario_aulas', function(Blueprint $table)
		{
			$table->increments('idhorario_aula');
			$table->integer('bimestre_idbimestre');
            $table->integer('Professores_idProfessores');
            $table->integer('materias_idmaterias');
            $table->integer('turmas_idturmas');
            $table->string('horario',10);
            $table->string('dia',10);
            $table->foreign('bimestre_idbimestre')->references('idbimestre')->on('bimestre')->ondelete('cascade');
            $table->foreign('Professores_idProfessores')->references('idProfessores')->on('Professores')->ondelete('cascade');
            $table->foreign('materias_idmaterias')->references('idmaterias')->on('materias')->ondelete('cascade');
            $table->foreign('turmas_idturmas')->references('idturmas')->on('turmas')->ondelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('horario_aulas');
	}

}
