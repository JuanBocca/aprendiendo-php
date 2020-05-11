<?php
    // Constantes
    // Contenedor de informacion que no puede variar

    define('nombre', 'Juan Bocca');
    define('web', 'No tiene');

    echo '<h1>'.nombre.'</h1>';
    echo '<h1>'.web.'</h1>';

    // A diferencia de las variables, las constantes no pueden
    // ser modificadas, su valor es siempre constante.

    // Constantes predefinidas

    echo PHP_OS;