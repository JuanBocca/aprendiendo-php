<?php
    /*
    Recoger dos numeros por URL (parametro GET)
    Realizar todas las operaciones basicas
    */

    if(isset($_GET['numero1']) && isset($_GET['numero2'])) {
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
    
        echo '<h3>La suma de '.$numero1.' + '.$numero2.' es: '.($numero1 + $numero2).'</h3>';
        echo '<h3>La resta de '.$numero1.' - '.$numero2.' es: '.($numero1 - $numero2).'</h3>';
        echo '<h3>La multiplicacion de '.$numero1.' x '.$numero2.' es: '.($numero1 * $numero2).'</h3>';
        echo '<h3>La division de '.$numero1.' % '.$numero2.' es: '.($numero1 / $numero2).'</h3>';
    } else {
        echo '<h2>Ingresa los parametros GET</h2>';
    }
?>