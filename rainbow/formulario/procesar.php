<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php
$nombre = $_POST["nombre"];
$correo= $_POST ["correo"];
$mensaje= $_POST ["textarea"];


$mailsend = mail ('eva-4ever92@hotmail.com' , 'COMENTARIOS' , "Nombre: $nombre\r\nCorreo: $correo\r\nMensaje: $textarea");

if ($mailsend) {
	echo "<p> Hola $nombre. Hemos recibido correctamente su correo electrónico, gracias por sus comentarios; en breve estaremos comúnicandonos con usted.</p>";
	}
	else {
		echo "Lo sentimos, su correo no fue enviado";
		}
 
?>
</body>
</html>