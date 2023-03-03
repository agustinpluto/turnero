<?php

$con = mysqli_connect("localhost", "agustin", "Ireliagod1!", "apirest");

if (!$con) {
    die("Error de conexión: " . mysqli_connect_error());
}

$sql = "SELECT * FROM usuarios";
$resultados = mysqli_query($con, $sql);

if (!$resultados) {
    die("Error en la consulta: " . mysqli_error($con));
}

if (mysqli_num_rows($resultados) > 0) {
    while ($fila = mysqli_fetch_assoc($resultados)) {
        echo $fila["id"] . " " . $fila["nombre"] . " " . $fila["apellido"] . "<br>";
    }
} else {
    echo "No se encontraron resultados en la base de datos.";
}
?>
