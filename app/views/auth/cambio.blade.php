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
            <div id="loginbox"  style="height: 350px">          

                <form id="loginform"  action="loginn" method="POST" >
    				<p>Bienvenido @if (Session::has('nom'))
                                {{Session::get('nom')}}
                         @endif es la primera vez que nos visitas, por cuestiones de seguridad te recomendamos que cambies tu contraseña.</p>
                         
                    <p>Introduce tu nueva contraseña.</p>
                                  
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></i></span><input class="form-control" id="password" placeholder="contraseña" type="password" name="upassword">
                       <div class="alert-danger"><?php echo $errors->first('upassword');?></div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-lock"></i></i></span><input class="form-control" id="password" placeholder="repite la contraseña" type="password" name="password">
                         <div class="alert-danger"><?php echo $errors->first('password');?></div>
                    </div>
                    <div class="form-actions clearfix">                      
                    <input class="btn btn-block btn-primary btn-default" name="envio" value="cambiar" type="submit">
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