
<?php
session_start();
?>
<?php include 'Vistas/barra_menu.php'; ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./Styles01.css">
    <title>Login</title>
<body>
    <!--
    <h2>Register</h2>
    <form method="POST" action=".\index.php?action=register">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Register</button>
    </form>
</body>
-->

<div class="input1">
        <h3 id="texton">Registro</h3>
        <form method="POST" action="index.php?action=register">
            <div class="input-group mb-3" id="input-texto">
                <span class="input-group-text" id="basic-addon"></span>
                <input type="text" name="username" id="username" class="form-control" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3" id="input-texto">
                <span class="input-group-text" id="basic-addon1"></span>
                <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" aria-label="Password" aria-describedby="basic-addon1" required>
            </div>
            <div class="input-group mb-3" id="input-texto">
                <span class="input-group-text" id="basic-addon1">@</span>
                <input type="email" name="email" id="email" class="form-control" placeholder="Correo" aria-label="Email" aria-describedby="basic-addon1" required>
            </div>
            <div class="boton-enviar">
                <input type="submit" value="Ingresar" id="textocolor">
            </div>
        </form>
    </div>
</html>
