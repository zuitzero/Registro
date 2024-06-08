<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
<form method="post" autocomplete="off">
    <img src="imagenes/cantarell.jpg" width="250">
    <h2> </h2>

    <div class="input-group">
        <div class="input-container">
            <input type="text" name="name" placeholder="Nombre Completo">
            <i class="fa-solid fa-user"></i>
        </div>
    </div>

    <div class="input-group">
        <div class="input-container">
            <input type="text" name="puesto" placeholder="Puesto Actual">
            <i class="fa-solid fa-briefcase"></i>
        </div>
    </div>

    <div class="input-group">
        <div class="input-container">
            <input type="text" name="razon_social" placeholder="Razón Social">
            <i class="fa-solid fa-building"></i>
        </div>
    </div>

    <div class="input-group">
        <div class="input-container">
            <input type="text" name="phone" placeholder="Teléfono">
            <i class="fa-solid fa-phone"></i>
        </div>
    </div>

    <div class="input-group">
        <div class="input-container">
            <input type="text" name="email" placeholder="Correo electrónico">
            <i class="fa-solid fa-envelope"></i>
        </div>
    </div>

    <a href="#">Términos y Condiciones</a>
    <input type="submit" name="send" class="btn" value="Enviar">
</form>

<?php
include("send.php");
?>

</body>
</html>
