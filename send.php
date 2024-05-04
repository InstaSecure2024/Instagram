<?php

include("conexion.php");

if(isset($_POST['send'])) {

    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['password']) >= 1
    ) {
        $name = mysqli_real_escape_string($conex, $_POST['name']);
        $password = mysqli_real_escape_string($conex, $_POST['password']);
        $fecha = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, contraseña, fecha) 
                     VALUES ('$name', '$password', '$fecha')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado){
            ?>
                <h3 class="success">La Verificación Ha Sido Completada</h3>
            <?php
        } else {
            ?>
                <h3 class="error">Ocurrió Un Error</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="error">Llena Todos Los Campos</h3>
        <?php
    }

}

?>