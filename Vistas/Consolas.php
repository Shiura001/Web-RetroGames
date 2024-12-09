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
    <link rel="stylesheet" href="./Styles2.css">
    
    <div class="container1">
        <div class="imagen">
            <img src= "imagenes/Consolas/Nes.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 id="color_titulo" class="card-title">Nintendo Entertainment System</h5>
              <p class="card-text">(También conocida como Nintendo NES o simplemente NES),6​ llamada en Japón como Family Computer (también llamada en Japón como Famicom), es una videoconsola descontinuada de 8 bits perteneciente a la tercera generación en la industria de los videojuegos, la primera consola de sobremesa de Nintendo en emplear cartuchos. Fue lanzada por Nintendo en Norteamérica, Europa y Australia entre 1985 y 1987.</p>
              <a href="https://es.wikipedia.org/wiki/Nintendo_Entertainment_System" class="btn btn-primary" target="_blank">Ver más</a>
            </div>
        </div>
        <div class="imagen">
            <img src= "imagenes/Consolas/Atari.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 id="color_titulo" class="card-title">Atari</h5>
              <p class="card-text">Atari es una marca que ha sido propiedad de múltiples empresas desde su creación en 1972. Actualmente es propiedad de Atari Interactive, una filial del holding francés Atari SA.1​2​3​.La primera empresa Atari Inc. fue fundada en Sunnyvale, California en 1972 por Nolan Bushnell y Ted Dabney, siendo una empresa pionera en los juegos de arcade, las consolas de videojuegos domésticos y las computadoras domésticas.</p>
              <a href="https://es.wikipedia.org/wiki/Atari_2600" class="btn btn-primary" target="_blank">Ver más</a>
            </div>
        </div>
        <div class="imagen">
            <img src= "imagenes/Consolas/master.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 id="color_titulo" class="card-title">Master System</h5>
              <p class="card-text">La Master System, comercializada en Japón bajo el nombre SEGA Mark III, es una consola de videojuegos de 8 bits basada en cartuchos y tarjetas, que fue desarrollada por Sega. Aunque estuvo muy por detrás en ventas fuera de Europa, Brasil, con un éxito moderado en Argentina y con un éxito menor en Estados Unidos, la experiencia sentó los cimientos para que Sega continuara con su liderazgo en esos mercados durante la siguiente generación con la Mega Drive..</p>
              <a href="https://es.wikipedia.org/wiki/Master_System" class="btn btn-primary" target="_blank">Ver más</a>
            </div>
        </div>
        
    </div>
    <div class="container1">
        <div class="imagen">
            <img src= "imagenes/Consolas/sonic.png" alt="..." id="imagen2" width="500px" height="300px">
            <img src= "imagenes/Consolas/genesis.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 id="color_titulo" class="card-title">Mega Drive</h5>
              <p class="card-text">Mega Drive, conocida en diversos territorios de América como Genesis, es una videoconsola de sobremesa de 16 bits desarrollada por Sega Enterprises, Ltd. Mega Drive fue la tercera consola de Sega y la sucesora de la Master System. Compitió contra la Super Nintendo de Nintendo, como parte de las videoconsolas de cuarta generación. La primera versión fue lanzada en Japón en 1988, sucedida por el lanzamiento en Norteamérica bajo el renombramiento de Sega Genesis en 1989..</p>
              <a href="https://es.wikipedia.org/wiki/Mega_Drive" class="btn btn-primary" target="_blank">Ver más</a>
            </div>
        </div>
        <div class="imagen">
            <img src= "imagenes/Consolas/link.png" alt="..." id="imagen2" width="400px" height="300px">
            <img src= "imagenes/Consolas/gbc.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 id="color_titulo" class="card-title">Gameboy Color</h5>
              <p class="card-text">La Game Boy es una videoconsola portátil de 8 bits de cuarta generación desarrollada y fabricada por Nintendo. Salió a la venta por primera vez en Japón el 21 de abril de 1989, en Norteamérica más tarde ese mismo año y en Europa a finales de 1990. Fue diseñado por el mismo equipo que desarrolló la serie Game & Watch de juegos electrónicos portátiles y varios juegos de Nintendo Entertainment System (NES):</p>
              <a href="https://es.wikipedia.org/wiki/Game_Boy" class="btn btn-primary" target="_blank">Ver más</a>
            </div>
        </div>
        <div class="imagen">
            <img src= "imagenes/Consolas/gba.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 id="color_titulo" class="card-title">Gameboy Advance</h5>
              <p class="card-text">La Game Boy Advance  abreviada como GBA, es una consola de videojuegos de la compañía Nintendo, fabricada desde marzo de 2001 hasta 2008. La GBA forma parte de la sexta generación de videoconsolas. El modelo original no tenía una pantalla con iluminación, lo que fue solucionado con la Game Boy Advance SP, un rediseño de la consola que incluía algunas mejoras como la pantalla con iluminación y el uso de baterías de litio.</p>
              <a href="https://es.wikipedia.org/wiki/Game_Boy_Advance" class="btn btn-primary" target="_blank">Ver más</a>
            </div>
        </div>
        
    </div>







        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>



</html>