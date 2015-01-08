<?php

class AlumnosController extends BaseController
{
	public function getIndex()
	{
		return View::make('hello');
	}

	public function saludo()
	{
		return 'hiadministrador';
	}


	public function postCreate()
	{
		$alumno = new Alumno;
        
        $alumno->matricula = Input::get('matricula');
        $alumno->nombre = Input::get('real_name');
        $alumno->apaterno = Input::get('apaterno');
        $alumno->amaterno = Input::get('amaterno');
        $alumno->curp = Input::get('curp');
        $alumno->password = Input::get('password');
        $alumno->sexo = Input::get('sexo');
        $alumno->fechanac = Input::get('fechanac');
        $alumno->email = Input::get('email');
        $alumno->situacion = Input::get('situacion');

        $alumno->save();

	}
}
?>