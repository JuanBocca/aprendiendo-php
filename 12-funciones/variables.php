<?php
    /*
    VARIABLES LOCALES:
    Se declaran dentro de una funcion y no pueden
    ser usadas fuera de esa funcion (a no ser que hagamos return).

    VARIABLES GLOBALES:
    Se declaran fuera de las funciones y estan disponibles
    dentro y fuera de las funciones.
    */

    // Variable Global
    $frase = 'Ni los genios son tan genios, ni los mediocres son tan mediocres';

    echo $frase;

    function holaMundo() {
        // Definimos esta variable como global!
        global $frase;
        echo '<h1>'.$frase.'</h1>';

        // Variable local
        $year = 2019;
        echo '<h1>'.$year.'</h1>';

        // Sacandola a nivel global!
        return $year;
    }

    echo holaMundo();

    // FUNCIONES VARIABLES
    function buenasDias() {
        return '<h1>Hola! Buenos dias :)</h1>';
    }
    function buenasTardes() {
        return '<h1>Que tal la comida?</h1>';
    }
    function buenasNoches() {
        return '<h1>Ya te vas? Buenas noches!</h1>';
    }

    $horario = 'Noches';
    $miFuncion = 'buenas'.$horario;

    echo $miFuncion();
?>