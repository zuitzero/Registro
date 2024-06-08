<?php

include("conexion.php");

if(isset($_POST['send'])) {

    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['puesto']) >= 1 &&
        strlen($_POST['razon_social']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1
    ) {
        $name = mysqli_real_escape_string($conex, trim($_POST['name']));
        $puesto = mysqli_real_escape_string($conex, trim($_POST['puesto']));
        $razon_social = mysqli_real_escape_string($conex, trim($_POST['razon_social']));
        $phone = mysqli_real_escape_string($conex, trim($_POST['phone']));
        $email = mysqli_real_escape_string($conex, trim($_POST['email']));
        $fecha = date("Y-m-d");
        $consulta = "INSERT INTO datos(nombre, puesto, razon_social, phone, email, fecha)
                    VALUES ('$name', '$puesto', '$razon_social', '$phone', '$email', '$fecha')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado) {
            ?>
                <h3 class="success">Tu registro se ha completado con éxito</h3>
            <?php
        } else {
            ?>
                <h3 class="error">Ocurrió un error en tu registro</h3>
            <?php
        }

    } else {
        ?>
            <h3 class="error">Llena todos los campos</h3>
        <?php
    }

}
?>
