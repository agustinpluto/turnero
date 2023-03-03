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

    if (mysqli_num_rows($resultado) > 0) {
        
        echo "El usuario ya existe en la base de datos.";
    } else {
        
        $sql2 = "INSERT INTO usuarios (nombre, apellido, dni, email, password) VALUES ('$nombre', '$apellido', '$dni', '$email', '$hash')";

        if (mysqli_query($con, $sql2)) {
            echo "El usuario ha sido registrado exitosamente.";
        } else {
            echo "Error al registrar el usuario: " . mysqli_error($con);
        }
    }
    


?>