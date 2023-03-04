<?php

    require(conexion.php);
    
    $nombre = mysqli_real_escape_string($con, $_POST["nombre"]);
    $apellido = mysqli_real_escape_string($con, $_POST["apellido"]);
    $dni = mysqli_real_escape_string($con, $_POST["dni"]);
    $email = mysqli_real_escape_string($con, $_POST["email"]);
    $password = mysqli_real_escape_string($con, $_POST["password"]);

    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $resultado = mysqli_query($con, $sql);

    $hash = password_hash($password, PASSWORD_BCRYPT);

    if ($resultado > 0) {
        echo "Usuario existente-";
    } else {
        $sql2 = "INSERT INTO usuarios (nombre, apellido, dni, email, contrasena) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $sql2);
        mysqli_stmt_bind_param($stmt, "sssss", $nombre, $apellido, $dni, $email, $contrasena);
        if (!$stmt) {
            die("Error al preparar la consulta: " . mysqli_error($conn));
        }
        if (mysqli_stmt_execute($stmt)) {
            echo "Registro exitoso";
        } else {
            echo "Error al registrar el usuario: " . mysqli_error($conn);
        }

    }
    mysqli_close($con);

?>