<?php

$con = mysqli_connect("localhost", "agustin", "Ireliagod1!", "apirest");

$sql = "SELECT * FROM usuarios";
$resultados = mysqli_query($con, $sql);

$fila = mysqli_fetch_assoc($resultados);

if (!$resultados) {
    die("Error en la consulta: " . mysqli_error($con));
}

while ($fila = mysqli_fetch_assoc($resultados)) {
    echo $fila["id"] . " " . $fila["nombre"] . " " . $fila["apellido"];
}
?>
