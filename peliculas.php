<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almacenamiento</title>

    <!-- Incluir bulma.min.css -->
    <link rel="stylesheet" type="text/css" href="assets/css/bulma.min.css">
    </head>

<body>
<section class="hero is-info">
 <div class="hero-body">
<p class="title">Informacion guardada </p>
</div>
</section>
<section class="section is-medium columns">
<div class="column"></div>
<div class= "column is-two-fifths">
  <?php

$NP = $_POST["NombrePelicula"];

                 $NP = $_POST["NombreProductor"];

echo "<h1 class='is-subtitle'>";
echo "<strong> Pelicula: </strong>". $NP;
echo "<strong> Productor: </strong>". $NP;

                 echo "/h1";

            ?>

        </div>

        <div class="column"> 

        </div>

    </section>

</body>

</html>