<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>
	<p>
		<strong>Nombre: </strong>{!! $name !!}<br>
		<strong>Email: </strong>{!! $email !!}<br>
		<strong>Passowrd: </strong>{!! $password !!}<br><br>
		@if($type=='admin')
			<strong>CUI: </strong>{!! $dpi !!}<br><br>
		@else
			<p>Estamos procesando tu solicitud, se te notificara cuando tu DPI este listo.</p>
			<br>
			<strong>Tu DPI fue Solicitado.</strong><br>
		@endif
		
	</p>
</body>
</html>