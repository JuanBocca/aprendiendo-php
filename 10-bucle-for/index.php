<?php
    // FOR

    /*
    for(variable contador; condicion; actualizacion contador) {
        instrucciones;
    }
    */

    $resultado = 0;

    for($i = 0; $i <= 100; $i++) {
        $resultado += $i;

        echo '<p>'.$resultado.'</p>';
    }

    echo '<h1>El resultado es: '.$resultado.'</h1>';

    // Ejemplo tabla multiplicacion
    if(isset($_GET['numero'])) {
        $numero = (int) $_GET['numero'];
    } else {
        $numero = 1;
    }

    echo '<h1>Tabla de multiplicar del numero '.$numero.'</h1>';

    
    for($contador = 1; $contador <= 10; $contador++) {
        if($numero == 45) {
            echo 'No se pueden mostrar estas operaciones';
        break;
        }

        echo $numero.' x '.$contador.' = '.($numero * $contador).'<br>';
    }
?>