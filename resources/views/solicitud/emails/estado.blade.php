<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Document</title>
</head>
<body>
	<strong>Nombre: </strong>{!! $name !!}<br>
	<strong>Email: </strong>{!! $email !!}<br>
	@if($state == 'En Proceso')	
		<p>Tu solicitud esta </p>{!! $state !!}<br>
	@elseif($state == 'Listo para Entregar')
		<p>Tu DPI este listo.</p><br>
		<strong>CUI: </strong>{!! $dpi !!}<br>
	@else
		<p>Estamos procesando tu solicitud, se te notificara cuando tu DPI este listo.</p>
		<br>
		<strong>El Estado de tu Solicitud: </strong>{!! $state!!}<br>
	@endif
</body>
</html>