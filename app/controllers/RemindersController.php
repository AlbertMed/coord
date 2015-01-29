<?php

class RemindersController extends Controller {

	/**
	 * Display the password reminder view.
	 *
	 * @return Response
	 */
	public function getRemind()
	{
		return View::make('auth.recuperar_pass');
	}

	/**
	 * Handle a POST request to remind a user of their password.
	 *
	 * @return Response
	 */
	public function postRemind()
	{
		DB::disconnect('mysql');
		switch ($response = Password::remind(Input::only('email'),
		function($message) {
        $message->subject('Recuperar Password CBT Chapultepec');
        }))
		{
			case Password::INVALID_USER:
				return Redirect::back()->with('error','No hemos encontrado un usuario con ese Email');

			case Password::REMINDER_SENT:
				return Redirect::back()->with('status', 'Te hemos enviado un email');
		}
		
	}

	/**
	 * Display the password reset view for the given token.
	 *
	 * @param  string  $token
	 * @return Response
	 */
	public function getReset($token = null)
	{
		if (is_null($token)){ 
			App::abort(404);
	   }else{

		return View::make('auth.reset')->with('token', $token);
		}
	}

	/**
	 * Handle a POST request to reset a user's password.
	 *
	 * @return Response
	 */
	public function postReset()
	{
		 $credentials = array(
            'email' => Input::get('email'),
            'password' => Input::get('password'),
            'password_confirmation' => Input::get('password_confirmation'),
            'token' => Input::get('token'),
                );
        
		$response = Password::reset($credentials, function()
		{
			$datos = array(	
            $password = Hash::make(Input::get('password')),
			$email = Input::get('email')
			);
				   DB::update('update alumnos set password = ? where email = ?', $datos);
				  DB::disconnect('mysql');		  			                 			
		});

		switch ($response)
		{
			case Password::INVALID_PASSWORD:
			    return Redirect::back()->with('error', 'Passwords deben ser mayor a 6 caracteres y ambas iguales');
			case Password::INVALID_TOKEN:
			    return Redirect::back()->with('error', 'La petición para este enlace ha caducado');
			case Password::INVALID_USER:
				return Redirect::back()->with('error', 'Ningun usuario tiene el email proporcionado');

			case Password::PASSWORD_RESET:
				return Redirect::to('login');
		}
	}

}
