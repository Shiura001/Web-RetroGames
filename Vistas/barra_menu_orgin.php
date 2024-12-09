<!DOCTYPE html>
 <html lang="en">
     <!-- Colocamos la barra de navegación -->
   <header>
  
       <div class="menu">
           <div class="titulo">
               <h1>Retro Games</h1>
               <div class="welcome">
            <?php
            if (isset($_SESSION['username'])) {
                echo "<p>Bienvenido, " . htmlspecialchars($_SESSION['username']) . "!</p>";
            } else {
                echo "<p>Bienvenido, visitante!</p>";
            }
            ?>
        </div>
           </div>
           <nav>
               <ul>
                   <li><a href="index.php?action=main">Inicio</a>
                       <ul id="subcategoria">
                           <li><a href="index.php?action=login">Iniciar Sesion</a></li>
                       </ul>

                   <li><a href="index.php?action=juegos">Juegos</a></li>
                   <li><a href="index.php?action=emuladores">Emuladores</a></li>
                   <li><a href="index.php?action=consolas">Consolas</a>
                       <ul id="subcategoria">
                           <li><a href="index.php?action=historia">Historia</a></li>
                       </ul>
                   </li>
                   <li><a href="index.php?action=tulista">TuLista</a>
                       <ul id="subcategoria">
                           <li><a href="index.php?action=nosotros">Nosotros</a></li>
                       </ul>

                   
                   </li>
               </ul>
           </nav>
       </div>
       
   </header>
 
