<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/hello', function()
{
	return View::make('hello');
    
});

Route::get('/', function()
            {
                 if (Session::has('in'))
                 {
                    return View::make('practicas'); 
                 }else{
                    return View::make('login'); 
                 }                                    
        }
        );

Route::post('login', 'UserLogin@user');

Route::get('/logout', 'UserLogin@logout');

//Route::get('/prueba','AlumnosController@postCreate');

//Route::controller('/alumno','AlumnosController');

//Route::get('/saludo','AlumnosController@saludo');

Route::get('/insert', function()
{
	$alumno = new Alumno;
        
        $alumno->matricula = 1234;
        $alumno->nombre = 'Albert';
        $alumno->apaterno = 'Jiménez';
        $alumno->amaterno = 'Medina';
        $alumno->curp = 'JIML910105HDFS04';
        $alumno->password = Hash::make('Hola');
        $alumno->sexo = 'M';
        $alumno->fechanac = '1991-01-05';
        $alumno->email = 'albert91.me.d@gmail.com';
        $alumno->situacion = 'servicio';

        $alumno->save();

});

Route::get('/registro',function(){
    return View::make('registro');
});

//Route::get('/login2', 'AuthController@getLogin');


