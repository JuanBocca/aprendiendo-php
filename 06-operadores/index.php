<?php

    //Operadores aritmeticos
    $numero1 = 55;
    $numero2 = 33;

    echo 'Suma: '.($numero1+$numero2).'<br>';
    echo 'Resta: '.($numero1-$numero2).'<br>';
    echo 'Multiplicación: '.($numero1*$numero2).'<br>';
    echo 'División: '.($numero1/$numero2).'<br>';
    echo 'Resto: '.($numero1%$numero2);

    // Operadores incremento y decremento
    $anio = 2019;

    /*
    INCREMENTO
    $anio = $anio + 1;
    $anio++;
    */
    /*
    PREINCREMENTO
    $anio = 1 + $anio;
    ++$anio;
    */

    /*
    DECREMENTO
    $anio = $anio - 1;
    $anio--;
    --$anio;
    */
    /*
    PREDECREMENTO
    $anio = 1 - $anio;
    --$anio;
    */

    echo '<h1>'.$anio.'</h1>';

    // Operadores de asignacion
    $edad = 55;

    echo $edad.'<br>';

    // $edad = $edad + 5;
    echo ($edad+=5).'<br>';

    // $edad = $edad - 5;
    echo ($edad-=5).'<br>';

    // $edad = $edad * 5;
    echo ($edad*=5).'<br>';

    // $edad = $edad / 5;
    echo ($edad/=5).'<br>';
?>