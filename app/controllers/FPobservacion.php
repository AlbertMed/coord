<?php

class FPobservacion extends BaseController{
	
	
	public function getIndex(){
		return View::make('observacion.pobservacion');
	}

	public function postCartapres()	{
		
		if(isset($_POST['enviar2'])){
			//CODIGO PARA LA DESCARGA:
	    
		    $file = "img/pobservacion/2aceptacion/cartaAceptacion.docx";
			header("Content-disposition: attachment; filename="."cartaAceptacion.docx");
			header("Content-type: application/octet-stream");
			readfile($file);
			unlink($file); 
		}
		
		if(isset($_POST['enviar'])){
			DB::connection('mysql');
			$user1 = DB::table('alumnos')->where('matricula', Session::get('matricula'))->first();
			$Ndescarga= $user1->Ndescargas;
			DB::disconnect('mysql');
			if($Ndescarga>=3){
					  $rules = array(								
						'NombreResponsable'=> 'required|regex:/^[a-záéíóúäëïöüñ\s]+$/i|min:3|max:50',
						'CargoResponsable'=> 'required|regex:/^[a-z0-9áéíóúäëïöüñ\s]+$/i|min:3|max:50',
						'municipio'=> 'required|regex:/^[a-z0-9áéíóúäëïöüñ\s]+$/i|min:3|max:50',
						'fCartaPresentacion'=> 'required',
						'oculto' => 'required'			
					  );
			
			}else{
				$Ndescarga=$Ndescarga+1;
				$rules = array(								
					'NombreResponsable'=> 'required|regex:/^[a-záéíóúäëïöüñ\s]+$/i|min:3|max:50',
					'CargoResponsable'=> 'required|regex:/^[a-z0-9áéíóúäëïöüñ\s]+$/i|min:3|max:50',
					'municipio'=> 'required|regex:/^[a-z0-9áéíóúäëïöüñ\s]+$/i|min:3|max:50',
					'fCartaPresentacion'=> 'required'			
				);
			}
			
			$messages = array(               								
				'NombreResponsable.required' => 'Este campo es requerido',
				'NombreResponsable.min' => 'Este campo debe contener al menos 3 caracteres',
				'Nombreresponsable.max' => 'Este campo debe contener menos de 50 carateres',
				'Nombreresponsable.regex' => 'Este campo tiene un formato inválido',
				'CargoResponsable.required' => 'Este campo es requerido',
				'CargoResponsable.min' => 'Este campo debe contener al menos 3 caracteres',
				'Cargoresponsable.max' => 'Este campo debe contener menos de 50 carateres',
				'Cargoresponsable.regex' => 'Este campo tiene un formato inválido',	
                'municipio.required' => 'Este campo es requerido',
				'municipio.min' => 'Este campo debe contener al menos 3 caracteres',
				'municipio.max' => 'Este campo debe contener menos de 50 carateres',
				'municipio.regex' => 'Este campo tiene un formato inválido',	
				'fCartaPresentacion.required' => 'La Fecha es requerida',
				'oculto.required' => 'Excediste el límite de descargas de este formato'							
            );
			
			$validator = Validator::make(Input::All(), $rules, $messages);
			
			if($validator->passes()){
			
			$datos = array(								
				$Nresponsable = Input::get('NombreResponsable'),
				$Cresponsable = Input::get('CargoResponsable'),				
				$matricula = Session::get('matricula')
			);
												
			$user = DB::table('pobservacion')->where('user_matricula', Session::get('matricula'))->first();
			DB::disconnect('mysql');
			$conn = DB::connection('mysql');
            if ($user){		
				   DB::update('update pobservacion set Nresponsable = ?, Cresponsable = ? where user_matricula = ?', $datos);		  			      
              }else{
                  $sql = 'INSERT INTO pobservacion(Nresponsable,Cresponsable,user_matricula) VALUES(?,?,?)';
			      $conn->insert($sql,$datos);            
              }									
			$conn=DB::disconnect('mysql');
			$conn=null;
			$conta =DB::table('contador')->where('id', 1)->first();
			$num=$conta->numero;
			$num=$num+1;
			
			
			
			$user2 = DB::table('alumnos')->where('matricula', Session::get('matricula'))->first();
			//llenado de la plantilla
			$PHPWord = new PHPWord();
            $document = $PHPWord->loadTemplate('img/pobservacion/1presentacion/presentacionD.docx');
			$document->setValue('fecha', utf8_decode(Input::get('fCartaPresentacion')));
			$document->setValue('Encargado', strtoupper(utf8_decode(Input::get('NombreResponsable'))));
            $document->setValue('cargo', strtoupper(utf8_decode(Input::get('CargoResponsable'))));
            $document->setValue('municipio', strtoupper(utf8_decode(Input::get('municipio'))));					    
			$document->setValue('nombre', utf8_decode($user2->nombre));
			$document->setValue('apaterno', utf8_decode($user2->apaterno));
			$document->setValue('amaterno', utf8_decode($user2->amaterno));
			$document->setValue('Carrera', utf8_decode($user2->carrera));
			$document->setValue('numFolio',$conta->numero);
			DB::update('update contador set numero=? where id=?',array($num,1));
			DB::disconnect('mysql');
			$conta=DB::disconnect('mysql');
			$datoss=array(
				$Ndescarga,
				$matricula = Session::get('matricula')
			);
			
			DB::update('update alumnos set Ndescargas = ? where matricula = ?', $datoss);
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