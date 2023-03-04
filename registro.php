<?php
$servername = "localhost";
$username = "agustin";
$password = "Ireliagod1!";
$dbname = "apirest";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("La conexión a la base de datos falló: " . mysqli_connect_error());
}

$sql = "INSERT INTO usuarios (nombre, apellido, dni, email, contrasena) VALUES (?, ?, ?, ?, ?)";
$stmt = mysqli_prepare($conn, $sql);
if (!$stmt) {
    die("Error al preparar la consulta: " . mysqli_error($conn));
}

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$dni = $_POST["dni"];
$email = $_POST["email"];
$contrasena = $_POST["contrasena"];

mysqli_stmt_bind_param($stmt, "sssss", $nombre, $apellido, $dni, $email, $contrasena);

if (mysqli_stmt_execute($stmt)) {
    echo "Registro exitoso";
} else {
    echo "Error al registrar el usuario: " . mysqli_error($conn);
}

mysqli_close($conn);

?>