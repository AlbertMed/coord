<?php
 
class UserLogin extends BaseController {       
    
    public function user(){
        // get POST data
        $userdata = array(
            'matricula' => Input::get('username'),
            'password' => Input::get('password')
        );
        
        
      
        if(Auth::attempt($userdata)){
            
             $matricula = Input::get('username');
           
             $resultado = DB::table('alumnos')->where('matricula', $matricula)->first();
            
             Session::put('nom',$resultado->nombre);
             Session::put('nomP',$resultado->apaterno);
             Session::put('nomM',$resultado->amaterno);
             Session::put('estatus',$resultado->situacion);
             Session::put('matricula',$matricula);
             
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