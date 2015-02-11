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
	return View::make('observacion.example');
    
});

Route::get('login', function()
            {
                 if (Session::has('in'))
                 {
                    return Redirect::to('practicas'); 
                 }else{
                    return View::make('auth.login'); 
                 }                                    
        }
        );
Route::get('practicas',array('before' => 'guest', function(){
         return View::make('auth.login'); 
}) );
Route::post('login', 'UserLogin@user');

Route::get('/logout', 'UserLogin@logout');

Route::post('cartaPresentacion', 'FPobservacion@postCartapres');
//Route::get('/prueba','AlumnosController@postCreate');

//Route::controller('/alumno','AlumnosController');

//Route::get('/saludo','AlumnosController@saludo');

Route::post('loginn','Cambios@verifica');

Route::get('/insert', function()  //falta cambiar valores ... primero hacer registro
{
    
    
        $fp = fopen("prueba.txt", "r");
        while (!feof($fp)) {
            $linea = fgets($fp);
            $porciones = explode(",", $linea);
           // echo $linea . "<br />";
            $resultado = count($porciones);
            for($i = 0; $i<$resultado; $i++){
                echo $porciones[$i]."<br />";
            }
            $alumno = new Alumno; 
            $alumno->matricula =  $porciones[0];
            $alumno->nombre =$porciones[1];
            $alumno->apaterno = $porciones[2];
            $alumno->amaterno = $porciones[3];
            $alumno->curp =$porciones[4];
            $alumno->carrera=$porciones[5];
            $alumno->password = Hash::make($porciones[6]);
            $alumno->sexo = $porciones[7];
            $alumno->fechanac = $porciones[8];
            $alumno->email = $porciones[9];
            $alumno->situacion = $porciones[10];
            $alumno->tipo=$porciones[11];
            $alumno->Ndescargas=$porciones[12];
            $alumno->save();
        }


        fclose($fp);
	   
        
       // DB::insert('insert into contador (numero,id) values(0,1)');
        //DB::disconnect('mysql');

});

Route::get('/registro',function(){//falta revisar...
    return View::make('registro');
});


Route::get('observacion', function(){
    if(Session::has('nom')){
        return View::make('observacion.pobservacion');
    }else{
        return View::make('auth.login');
    }
      
  });//necesita estar logeado checar
 
 Route::get('password', 'RemindersController@getRemind');
 Route::post('password', 'RemindersController@postRemind');
 Route::controller('password', 'RemindersController');
 
 Route::get('ejecucion', function(){
 return View::make('ejecucion.pejecucion'); });//necesita estar logeado checar




 
 Route::get('/',function(){
     return View::make('index'); });
     
Route::get('mision',function(){
     return View::make('pages.Mision');});
     
Route::get('bolsa-de-trabajo',function(){
     return View::make('pages.bolsaTrabajo');});
 
Route::get('contacto',function(){
  return View::make('pages.contacto');  
});

Route::get('estrategias',function(){
    return View::make('pages.Estrategias');
});
     
Route::get('facultades',function(){
    return View::make('pages.facultades');
});

Route::get('funciones',function(){
    return View::make('pages.Funciones');
});

Route::get('objetivo',function(){
    return View::make('pages.Objetivos');
});

Route::get('componentes-cognitivos',function(){
    return View::make('pages.plantaDC');
});

Route::get('comunicación-y-lenguaje',function(){
    return View::make('pages.plantaDCL');
});

Route::get('ciencias-naturales',function(){
    return View::make('pages.plantaDCN');
});

Route::get('coordinación-de-vinculacion',function(){
    return View::make('pages.plantaDCO');
});

Route::get('ciencias-sociales-y-humanidades',function(){
    return View::make('pages.plantaDCS');
});

Route::get('direccion',function(){
    return View::make('pages.plantaDD');
});

Route::get('informática-y-computacion',function(){
    return View::make('pages.plantaDIC');
});

Route::get('matemáticas-y-razonamiento-complejo',function(){
    return View::make('pages.plantaDM');
});

Route::get('orientacion',function(){
    return View::make('pages.plantaDO');
});
            
Route::get('seguimiento-egresados',function(){
    return View::make('pages.segimientoEgresados');
});

Route::get('seguro-facultativo',function(){
    return View::make('pages.seguro-facultativo');
});

Route::get('vision',function(){
    return View::make('pages.Vision');
});

Route::get('aulas',function(){
    return View::make('pages.plantaFisica.aulas');
});

Route::get('sala-de-usos-multiples',function(){
    return View::make('pages.plantaFisica.usosMultiples');
});

Route::get('es',function(){
    return View::make('observacion/ejemplo');
});

Route::get('taller-autotronica',function(){
    return View::make('pages.plantaFisica.autoto');
});

Route::get('biblioteca',function(){
    return View::make('pages.plantaFisica.biblio');
});

Route::get('sala-computacion',function(){
    return View::make('pages.plantaFisica.computo');
});

Route::get('laboratorio',function(){
    return View::make('pages.plantaFisica.laboratorio');
});

Route::get('sala-recepcional',function(){
    return View::make('pages.plantaFisica.recepcional');
});

Route::get('archivo',function(){
    return View::make('pages.plantaFisica.AreaAdmin.archivo');
});

Route::get('secretaria-escolar',function(){
    return View::make('pages.plantaFisica.AreaAdmin.sec_escolar');
});

Route::get('secretarias',function(){
    return View::make('pages.plantaFisica.AreaAdmin.secretarias');
});

Route::get('subdireccion',function(){
    return View::make('pages.plantaFisica.AreaAdmin.subdireccion');
});