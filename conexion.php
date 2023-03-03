<?php

      $con = mysqli_connect("localhost", "agustin", "Ireliagod1!", "apirest");
      
      $sql = "SELECT * FROM usuarios";
      $resultados = mysqli_query($con, $sql);

      $fila = mysqli_fetch_assoc($resultados);

      var_dump($fila['dni']);

?>
