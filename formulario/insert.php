</!DOCTYPE html>
<html>
<body>
<?php

$con = mysqli_connect("localhost", "user_migraciones", "Oad221c.,", "migraciones");
if (!$con)
	{
		echo "Error al conectar con la Base de datos: ".mysqli_connect_error();
		die();
	}

mysqli_select_db("migraciones", $con);

$query="INSERT INTO migraciones.migraciones ( Host_imap_origen, email_origen, contrasena_origen, Host_imap_destino, email_destino, contrasena_destino ) VALUES ('$_POST[Host_imap_origen]', '$_POST[email_origen]', '$_POST[contraseña_origen]', '$_POST[Host_imap_destino]', '$_POST[email_destino]', '$_POST[contraseña_destino]')";

if (!mysqli_query($con,$query))
	{
		die('Error al insertar en la BD');

	}
echo "Datos insertados correctamente";

mysqli_close($con)

?>
</body>
</html>
