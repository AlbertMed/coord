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
                    return Redirect::to('practicas'); 
                 }else{
                    return View::make('login'); 
                 }                                    
        }
        );
Route::get('practicas',array('before' => 'guest', function(){
         return View::make('login'); 
}) );
Route::post('login', 'UserLogin@user');

Route::get('/logout', 'UserLogin@logout');

//Route::get('/prueba','AlumnosController@postCreate');

//Route::controller('/alumno','AlumnosController');

//Route::get('/saludo','AlumnosController@saludo');

Route::get('/insert', function()  //falta cambiar valores ... primero hacer registro
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

Route::get('/registro',function(){//falta revisar...
    return View::make('registro');
});


Route::get('observacion', function(){
 return View::make('observacion.pobservacion'); });//necesita estar logeado checar
 
 Route::get('index',function(){
     return View::make('index'); });
     
Route::get('mision',function(){
     return View::make('Mision');});
     
Route::get('bolsa-de-trabajo',function(){
     return View::make('bolsaTrabajo');});
 
Route::get('contacto',function(){
  return View::make('contacto');  
});

Route::get('estrategias',function(){
    return View::make('Estrategias');
});
     
Route::get('facultades',function(){
    return View::make('facultades');
});

Route::get('funciones',function(){
    return View::make('Funciones');
});

Route::get('objetivo',function(){
    return View::make('Objetivos');
});

Route::get('componentes-cognitivos',function(){
    return View::make('plantaDC');
});

Route::get('comunicación-y-lenguaje',function(){
    return View::make('plantaDCL');
});

Route::get('ciencias-naturales',function(){
    return View::make('plantaDCN');
});

Route::get('coordinación-de-vinculacion',function(){
    return View::make('plantaDCO');
});

Route::get('ciencias-sociales-y-humanidades',function(){
    return View::make('plantaDCS');
});

Route::get('direccion',function(){
    return View::make('plantaDD');
});

Route::get('informática-y-computacion',function(){
    return View::make('plantaDIC');
});

Route::get('matemáticas-y-razonamiento-complejo',function(){
    return View::make('plantaDM');
});

Route::get('orientacion',function(){
    return View::make('plantaDO');
});

Route::get('seguimiento-egresados',function(){
    return View::make('segimientoEgresados');
});

Route::get('seguro-facultativo',function(){
    return View::make('seguro-facultativo');
});

Route::get('vision',function(){
    return View::make('Vision');
});