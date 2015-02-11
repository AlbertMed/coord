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
			    $table->string('user_matricula');
			  	$table->date('finicio')->default('2015-01-01');
			  	$table->date('ffinal')->default('2015-01-02');
			  	$table->string('semestre')->default('primer');
			  	$table->string('Nresponsable');
			  	$table->string('Cresponsable');
			  	$table->string('Direccion')->default('null');
			  	$table->string('tel')->default('0000000000');
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
