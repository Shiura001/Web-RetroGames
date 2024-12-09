<?php
session_start();
?>
<?php include 'Vistas/barra_menu.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name=”author” content=”Graf_Danilo_David”> 
    <meta name="robots" content="index, follow">
    <meta name="description" content="Revive la nostalgia con nuestra colección de videojuegos retro. Explora una amplia variedad de clásicos atemporales y descubre los títulos icónicos que marcaron una era en la historia de los videojuegos y sus consolas.">
    <meta name="keywords" content="videojuegos retro, juegos clásicos, nostalgia, consolas antiguas, entretenimiento vintage, roms,gba,gameboy">
    <title>Retrogame</title>
    <link rel="icon" href="imagenes/icono.ico" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./Styles01.css">
    
    
</head>

<body>
    
   
    <!-- Colocamos las imagenes de los juegos -->

    <section>
      <div class="row">
        <div class="imagen">
            <img src= "imagenes/mario.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 id="color_titulo" class="card-title">Super Mario bros</h5>
              <p class="card-text">Es un videojuego de plataformas, diseñado por Shigeru Miyamoto, lanzado el 13 de septiembre de 1985 y producido por la empresa japonesa Nintendo, para la consola Nintendo Entertainment System.</p>
              <a href="https://es.wikipedia.org/wiki/Super_Mario_Bros." class="btn btn-primary" target="_blank">Ver más</a>
            </div>        
        </div>
      </div>

      <div class="row">
        <div class="imagen2">
          <img src= "imagenes/contra.jpg" class="card-img-top" alt="...">
          <div class="card-body">
          <h5 id="color_titulo" class="card-title">Contra</h5>
          <p class="card-text">Desarrollado y publicado por Konami, lanzado originalmente como un juego de arcade el 20 de febrero de 1987.En 1988 se lanzó una versión doméstica para Nintendo Entertainment System, junto con puertos para varios formatos de computadora, incluido el <b>MSX2"</b></p>
          <a href="https://es.wikipedia.org/wiki/Contra_(videojuego)" class="btn btn-primary" target="_blank">Ver más</a>
          </div>

        </div>
      </div>
    </section>
    
    

    
</body>


</html>