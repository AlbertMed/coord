<?php
 
class UserLogin extends BaseController {
 
    public function user()
    {
        // get POST data
        $userdata = array(
            'nombre' => Input::get('username'),
            'password' => Input::get('password')
        );
      
        if(Auth::attempt($userdata))
        {
            Session::put('in',true);
            return View::make('practicas');    
        }
        else
        {            
			return Redirect::to('/')->with('login_errors',true);
        }
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return Redirect::to('/');
    }
}

?>