<!DOCTYPE html>
<html>
    <head>
     @include('includes.stylesEncabezado')
        <meta charset="utf-8">
        <title>Login</title>

  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  
  <script>
  $(function() {
    $( "#datepicker" ).datepicker();
  });
  </script>
    </head>
    <body>

    <form method="POST" action="login2">
    Matrícula:<input type="text" name="matricula" value="" placeholder="matricula">
    fecha: <input type="text" id="datepicker" placeholder="tu fecha">

    CURP:<input type="text" name="curp" value="" placeholder="curp">
    
    <button type="button" class="btn btn-primary">ENVIAR</button>
    </form>
    	
    </body>
</html>