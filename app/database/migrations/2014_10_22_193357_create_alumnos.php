<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){
		Schema::create('alumnos', function(Blueprint $table){		
			
		  	$table->string('matricula')->unique()->primary();
		  	$table->string('nombre');
		  	$table->string('apaterno');
		  	$table->string('amaterno');
		  	$table->string('curp')->unique();
			$table->string('carrera');
		  	$table->string('password');
		  	$table->string('sexo');
		  	$table->date('fechanac');
		  	$table->string('email')->unique();
		  	$table->string('situacion');
			$table->integer('tipo');  
			$table->integer('Ndescargas');
  	
		});
		
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	
	public function down()

	{
	Schema::drop('alumnos');
	}

}