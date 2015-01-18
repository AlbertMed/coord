<?php

class FPobservacion extends BaseController
{
	public function getIndex()
	{
		return View::make('observacion.pobservacion');
	}

	public function postCartapres()
	{
		if(isset($_POST['enviar'])){
			
			$rules = array(
				'Finicio' => 'required',
				'Ffinal'  => 'required',
				'semestre'=> 'required|integer|between:3,6',
				'NombreResponsable'=> 'required|regex:/^[a-záéíóúäëïöüñ\s]+$/i|min:3|max:50',
				'CargoResponsable'=> 'required|regex:/^[a-z0-9áéíóúäëïöüñ\s]+$/i|min:3|max:50',
				'DireccionLugar'=> 'required|regex:/^[a-z0-9áéíóúäëïöüñ\s]+$/i|min:3|max:50',
				'TeleLugar'=> 'required|digits_between:10,12'
			);
			
			$messages = array(
                'Finicio.required' => 'La fecha de inicio es requerida',
				'Ffinal.required' => 'La fecha de término es requerida',
				'semestre.required' => 'El campo semestre es requerido',
				'semestre.integer' => 'El campo semestre debe ser un número entero',
				'semestre.between' => 'El campo semestre debe estar entre 3 y 6',
				'NombreResponsable.required' => 'Este campo es requerido',
				'NombreResponsable.min' => 'Este campo debe contener al menos 3 caracteres',
				'Nombreresponsable.max' => 'Este campo debe contener menos de 50 carateres',
				'Nombreresponsable.regex' => 'Este campo tiene un formato inválido',
				'CargoResponsable.required' => 'Este campo es requerido',
				'CargoResponsable.min' => 'Este campo debe contener al menos 3 caracteres',
				'Cargoresponsable.max' => 'Este campo debe contener menos de 50 carateres',
				'Cargoresponsable.regex' => 'Este campo tiene un formato inválido',
				'DireccionLugar.required' => 'Este campo es requerido',
				'DireccionLugar.min' => 'Este campo debe contener al menos 3 caracteres',
				'DireccionLugar.max' => 'Este campo debe contener menos de 50 carateres',
				'DireccionLugar.regex' => 'Este campo tiene un formato inválido',
				'TeleLugar.required' => 'Este campo es requerido',
				'TeleLugar.digits_between' => 'El campo teléfono debe tener un formato válido'
				
            );
			
			$validator = Validator::make(Input::All(), $rules, $messages);
			
			if($validator->passes()){
			
			$datos = array(
				$user_matricula = 1027172,
				$finicio = Input::get('Finicio'),
				$ffinal = Input::get('Ffinal'),
				$semestre = Input::get('semestre'),
				$Nresponsable = Input::get('NombreResponsable'),
				$Cresponsable = Input::get('CargoResponsable'),
				$Direccion = Input::get('DireccionLugar'),
				$tel = Input::get('TeleLugar')
			);									
			
			$conn = DB::connection('mysql');
			$sql = 'INSERT INTO pobservacion(user_matricula,finicio,ffinal,semestre,Nresponsable,Cresponsable,Direccion,tel) VALUES(?,?,?,?,?,?,?,?)';
			$conn->insert($sql,$datos);
			$conn = DB::disconnect('mysql');
			$conn = null;
			
			return View::make('observacion.pobservacion');
			}else{
				return Redirect::back()->withInput()->withErrors($validator);
			}						
		}	
	}
}
?>