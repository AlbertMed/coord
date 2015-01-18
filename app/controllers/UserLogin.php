<?php
 
class UserLogin extends BaseController {       
    
    public function user(){
        // get POST data
        $userdata = array(
            'nombre' => Input::get('username'),
            'password' => Input::get('password')
        );
        
        
      
        if(Auth::attempt($userdata)){
            
           // $con = DB::connection('mysql');
             $matricula = Input::get('username');
            
           
             $resultado = DB::table('alumnos')->where('nombre', $matricula)->first();          
           
            
             Session::put('nom',$resultado->nombre);
             Session::put('nomP',$resultado->apaterno);
             Session::put('nomM',$resultado->amaterno);
             Session::put('estatus',$resultado->situacion);
         
             $resultado = DB::disconnect('mysql');
               
            return View::make('practicas', array('res'=>$resultado));    
        }else{            
			return Redirect::to('/login')->with('login_errors',true);
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return Redirect::to('/');
    }
}

?>