<?php

class FPobservacion extends BaseController{
	
	
	public function getIndex(){
		return View::make('observacion.pobservacion');
	}

	public function postCartapres()	{
		
		if(isset($_POST['enviar'])){
			
			$rules = array(								
				'NombreResponsable'=> 'required|regex:/^[a-záéíóúäëïöüñ\s]+$/i|min:3|max:50',
				'CargoResponsable'=> 'required|regex:/^[a-z0-9áéíóúäëïöüñ\s]+$/i|min:3|max:50'				
			);
			
			$messages = array(               								
				'NombreResponsable.required' => 'Este campo es requerido',
				'NombreResponsable.min' => 'Este campo debe contener al menos 3 caracteres',
				'Nombreresponsable.max' => 'Este campo debe contener menos de 50 carateres',
				'Nombreresponsable.regex' => 'Este campo tiene un formato inválido',
				'CargoResponsable.required' => 'Este campo es requerido',
				'CargoResponsable.min' => 'Este campo debe contener al menos 3 caracteres',
				'Cargoresponsable.max' => 'Este campo debe contener menos de 50 carateres',
				'Cargoresponsable.regex' => 'Este campo tiene un formato inválido'				
            );
			
			$validator = Validator::make(Input::All(), $rules, $messages);
			
			if($validator->passes()){
			
			$datos = array(								
				$Nresponsable = Input::get('NombreResponsable'),
				$Cresponsable = Input::get('CargoResponsable'),				
				$matricula = Session::get('matricula')
			);
			$conn = DB::connection('mysql');									
			$user = DB::table('pobservacion')->where('user_matricula', Session::get('matricula'))->first();
			
            if ($user){		
				   DB::update('update pobservacion set Nresponsable = ?, Cresponsable = ? where user_matricula = ?', $datos);		  			      
              }else{
                  $sql = 'INSERT INTO pobservacion(Nresponsable,Cresponsable,user_matricula) VALUES(?,?,?)';
			      $conn->insert($sql,$datos);            
              }									
			
			
			$user2 = DB::table('alumnos')->where('matricula', Session::get('matricula'))->first();
			//llenado de la plantilla
			$PHPWord = new PHPWord();
            $document = $PHPWord->loadTemplate('img/pobservacion/1presentacion/presentacionD.docx');
			$document->setValue('Encargado', utf8_decode(Input::get('NombreResponsable')));
            $document->setValue('cargo', utf8_decode(Input::get('CargoResponsable')));		    
			$document->setValue('nombre', utf8_decode($user2->nombre));
			$document->setValue('apaterno', utf8_decode($user2->apaterno));
			$document->setValue('amaterno', utf8_decode($user2->amaterno));
			$document->setValue('Carrera', utf8_decode($user2->carrera));
			
			DB::disconnect('mysql');
            
			//no retornamos vista, simplemente hacemos la descarga
			//CODIGO PARA LA DESCARGA:
			$temp_file = tempnam(sys_get_temp_dir(), 'PHPWord');
            $document->save($temp_file);

            header("Content-Disposition: attachment; filename="."cartaPresentacion.docx");
            readfile($temp_file); 
            unlink($temp_file); 
			
			}else{
				return Redirect::back()->withInput()->withErrors($validator);
			}						
		}	
	}
}
?>