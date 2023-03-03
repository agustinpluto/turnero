<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Testing</h1>
    <?php

    require "conexion.php";


    ?>


	<h2>Registro de usuario</h2>
	<form method="POST" action="registro.php">
		<label>Nombre:</label>
		<input type="text" name="nombre"><br><br>

		<label>Apellido:</label>
		<input type="text" name="apellido"><br><br>

		<label>DNI:</label>
		<input type="text" name="dni"><br><br>

		<label>Correo electrónico:</label>
		<input type="email" name="email"><br><br>

		<label>Contraseña:</label>
		<input type="password" name="password"><br><br>

        <label>Repetir contraseña:</label>
		<input type="password" name="repassword"><br><br>

		<input type="submit" value="Registrarse">
	</form>

</body>
</html>
