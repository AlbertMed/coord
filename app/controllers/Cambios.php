 <script language="javascript" type="text/javascript">
        //<!-- <![CDATA[
        function msgbox(mensaje) {
                alert(mensaje);
        };
        // ]]> -->
</script>

<?php

class Cambios extends BaseController{
	
	public function getIndex(){
		return View::make('auth.cambio');
	}

	public function verifica(){
		
		if(isset($_POST['envio'])){
			
			$pas1=Input::get('upassword');
			$pas2=Input::get('password');
			if (strcmp($pas1, $pas2) !== 0) {
             echo "<script>msgbox(\"las contraseñas no coincieden\");</script>";
				return View::make('auth.cambio');
			 }else{
				$datos= array(
					'password' => Hash::make(Input::get('upassword')),
					'tipo' => 1					
				);
				
		    	//$conn = DB::connection('mysql');									
		    	//$conn = DB::table('alumnos')->where('matricula', Session::get('matricula'))->first();
				DB::table('alumnos')
            ->where('matricula', Session::get('matricula'))
            ->update($datos);
				//$sql='update alumnos set password=?,tipo=? where matricula=?';
				//$conn->update($sql,$datos);
				
			  DB::disconnect('mysql');
			    
			    return View::make('auth.login');	 
			 }
									
		}	
	}
}
?>