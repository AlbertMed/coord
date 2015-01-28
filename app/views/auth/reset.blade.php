<!DOCTYPE html>
<html lang="es"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <title>Coordvinc</title>
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @include('includes.styles')
        <?php echo HTML::style('css/login.css'); ?>
	     </head>    
         <body>
         
        <h1 align="center">Recuperación de Password</h1>
        <div id="container">
           <div id="logo">
                
            </div>
            
            <div id="loginbox"  style=" weight:600">   
                    
                           
               
                <form method="POST" >
					
                   @if (Session::has('error'))
                     <p style="color: red;">{{ Session::get('error') }}</p>
                   @else
                     <p>Introduce tu nueva password:</p>       
                   @endif
                
                    <div class="input-group input-sm">
                            
                      <div class="input-group">     
                        <span class="input-group-addon">
                           <i class="fa fa-envelope-o fa-fw"></i>
                        </span>
                        <input class="form-control"  placeholder="introduce tu correo" type="email" name="email">
                        <div class="alert-danger"><?php echo $errors->first('email');?></div>
		      </div>
                      <div class="input-group">			 					
                        <span class="input-group-addon">
                        <i class="fa fa-lock"></i>
			</i></span>
			<input class="form-control"  placeholder="password" type="password" name="password" id="password">
                      </div>
                      <div class="input-group">
                        <span class="input-group-addon">
			<i class="fa fa-lock"></i>
			</span>
			<input class="form-control" placeholder="Confirmar password" type="password" name="password_confirmation" id="password">
                      </div>
                      
		        <input type="hidden" name="token" value="{{ $token }}">
			</div> 		
                    <div class="form-actions clearfix">                      
                        <input class="btn btn-primary" value="Recuperar password" type="submit">
                    </div>
						 
                                      
                                                   
                </form>

  

                </div>
               
                 
        </div>

        <?php echo HTML::script('js/jquery.js'); ?>
        <?php echo HTML::script('js/jquery-ui.js'); ?>
        <?php echo HTML::script('js/login.js'); ?>
</body>
</html>