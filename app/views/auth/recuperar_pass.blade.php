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
         <h1 align="center">Sistema de la Coordinación</h1>
        <h2 align="center">CBT. LIC. JULIÁN DÍAZ ARIAS</h2>
        <div id="container">
           <div id="logo">
                
            </div>
            <div id="loginbox"  style=" weight:600">   
                    
                           
               
                <form method="POST" >
					
                   @if (Session::has('error'))
        <p style="color: red;">{{ Session::get('error') }}</p>
        <p>Intentalo de nuevo:</p>
    @elseif (Session::has('status'))
        <p style="color: #3CB371;">{{ Session::get('status') }}</p>
     @else
         <p>¿Olvidaste tu password? <br> Introduce el correo con el que estas dado de alta.</p>
    @endif
                            
                    
                                 
                    <div class="input-group">
                        <span class="input-group-addon">
                           <i class="fa fa-envelope-o fa-fw"></i>
                        </span>
                        <input class="form-control"  placeholder="introduce tu correo" type="email" name="email">
                         <div class="alert-danger"><?php echo $errors->first('email');?></div>
                    </div>
                    <div class="form-actions clearfix"> 
                                        
                    <input class="btn btn-block btn-primary btn-default" name="reset" value="enviar" type="submit">
                    </div>
                                                   
                </form>

  

                </div>
               
                 
        </div>

        <?php echo HTML::script('js/jquery.js'); ?>
        <?php echo HTML::script('js/jquery-ui.js'); ?>
        <?php echo HTML::script('js/login.js'); ?>
</body>
</html>