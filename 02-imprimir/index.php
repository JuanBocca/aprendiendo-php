<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir en pantalla - Master PHP</title>
</head>
<body>
    <h1>Master en <?php echo "PHP" ?></h1>

    <?="Bienvenido al curso mas grande de PHP"?>

    <?php
        // Titular de la seccion
        echo '<h3>Listado de Videojuegos</h3>';
        /*
            Esto es una lista
            de videojuegos
            modernos
        */
        echo '<ul>'
                ."<li>GTA</li>"
                ."<li>Fifa</li>"
                ."<li>Mario Bros</li>"
            .'</ul>';

            // Parrafo explicativo
        echo '<p>Esto es toda'.' - '.'lista de juegos</p>';
    ?>
</body>
</html>
