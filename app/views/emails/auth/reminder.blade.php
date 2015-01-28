<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		
		<h2>Sistema de la Coordinación del CBT Chapultepec</h2>
		<div>
			Para restablecer tu contraseña completa este formulario {{ URL::to('password/reset', array($token)) }}.
		<br>
			Info: Este link caduca en 30 minutos.
		</div>
	</body>
</html>
