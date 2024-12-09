
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./Styles01.css">
    <title>Retrogame</title>
  </head>
  <body>
    <header class="header">
      <div class="welcome">
            <?php
            if (isset($_SESSION['username'])) {
                echo "<p>Bienvenido, " . htmlspecialchars($_SESSION['username']) . "!</p>";
            } else {
                echo "<p>Bienvenido, visitante!</p>";
            }
            ?>
        </div>
        <div class="logo">
          <a href="index.php?action=main">
            <img src="./imagenes/icono.ico" alt="" >
          </a>
        </div>
        <nav>
            <ul class="nav-links">
                <li><a href="index.php?action=login">Ingresar</a></li>
                <li><a href="index.php?action=consolas">Consolas</a>
                    <ul class="menu-vertical">
                    <li><a href="index.php?action=historia">Historia</a></li>
                    </ul>
                </li>
                <li><a href="index.php?action=juegos">Juegos</a></li>
                <li><a href="index.php?action=emuladores">Emuladores</a></li>
            </ul>
        </nav>
        <a href="index.php?action=nosotros" class="btn"><button>Nosotros</button></a>
    </header>



    



   
  </body>
</html>