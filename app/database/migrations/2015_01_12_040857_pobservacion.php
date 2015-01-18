<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pobservacion extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pobservacion', function(Blueprint $table){		
			    $table->integer('user_matricula');
			  	$table->date('finicio');
			  	$table->date('ffinal');
			  	$table->integer('semestre');
			  	$table->string('Nresponsable');
			  	$table->string('Cresponsable');
			  	$table->string('Direccion');
			  	$table->string('tel');
				$table->foreign('user_matricula')->references('matricula')->on('alumnos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pobservacion');
	}

}
