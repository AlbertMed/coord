<html>
	<head>
		<title>prueba</title>
	</head>	
	<body>
		<?php foreach($res as $datos): ?>
		nombre: {{$datos->nombre}}
		<?php endforeach; ?>
    </body>
</html>