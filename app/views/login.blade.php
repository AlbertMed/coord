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
        <h2 align="center">CBT. LIC. JULIAN DIAZ ARIAS</h2>
        <div id="container">
             <div id="logo">
                
            </div>
            <div id="loginbox" >          

                <form id="loginform" action="login" method="post" >
    				
                    @if (Session::has('login_errors'))
                    <p style='color:#FB1D1D' >El nombre de usuario o la contraseña no son correctos.</p>
                    @else
                    <p>Introduzca usuario y contraseña para continuar.</p>
                    @endif
                                  
                    <div class="input-group input-sm">
                        <span class="input-group-addon"><i class="fa fa-user"></i></i></span><input class="form-control" id="username" placeholder="Matrícula" type="text" name="username">
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></span><input class="form-control" id="password" placeholder="Contraseña" type="password" name="password">
                    </div>
                    <div class="form-actions clearfix">                      
 <input class="btn btn-block btn-primary btn-default" value="Acceder" type="submit">
                    </div>
                    <div class="footer-login">
                        <div class="pull-left text">
                               
                              <font size="3px"><a href="forgot_password.php">¿Olvidaste tu password?</a><br>                   
                 <a href="register.php">¿No tienes una cuenta?. Registrate Aqui.</a></font>
                        </div>
    
                    </div>
                     <span style="color:#FFF">

                 </span>
                </form>

                </div>
               
                 
        </div>

        <?php echo HTML::script('js/jquery.js'); ?>
        <?php echo HTML::script('js/jquery-ui.js'); ?>
        <?php echo HTML::script('js/login.js'); ?>
</body>
</html>