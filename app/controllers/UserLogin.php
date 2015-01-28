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
             Session::put('matricula',$resultado->matricula);
             Session::put('tipo',$resultado->tipo);
             
             $resultado = DB::disconnect('mysql');
            switch(Session::get('tipo')){
                case 0:
                  return View::make('auth.cambio');
                  break;
                case 1:   
                   return View::make('practicas');
                   break;
                 default: break;
            }
                
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