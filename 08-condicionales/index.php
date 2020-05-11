<?php
    /*
    CONDICIONALES:
    if: 
        if(condicion) {
            instrucciones
        } else {
            otras instrucciones
        };
    
    
    OPERADORES DE COMPARACION:
    ==  igual (valores iguales)
    === identico (valores iguales, y el mismo tipo de dato)
    !=  diferente
    <>  diferente
    !== no identico
    <   menor que
    >   mayor que
    <=  menor o igual que
    >=  mayor o igual que


    OPERADORES LOGICOS:
    &&  AND y
    ||  OR  o
    !   NOT no
    and, or
    */

    // Ejemplo 1
    $color = 'azul';

    if($color == 'rojo') {
        echo "El color es rojo!";
    } else {
        echo 'El color NO es rojo!';
    }

    echo '<br>';

    // Ejemplo 2
    $year = 2018;

    if($year >= 2019) {
        echo 'Estamos de 2019 en adelante';
    } else {
        echo 'Aun no es 2019';
    }

    echo '<br>';

    // Ejemplo 3
    $nombre = 'David';
    $ciudad = 'Madrid';
    $continente = 'Asia';
    $edad = 20;
    $mayoria_edad = 18;

    if($edad >= $mayoria_edad) {
        echo '<h1>'.$nombre.' es mayor de edad</h1>';
        if($continente == 'Europa') {
            echo '<h2>Y es de '.$ciudad.'</h2>';
        } else {
            echo 'No es europeo';
        }
    } else {
        echo '<h1>'.$nombre.' no es mayor de edad</h1>';
    }

    echo '<hr>';

    // Ejemplo 4
    $dia = 3;

    /*
    Funcional, pero no esta optimizado, dificil de leer.

    if($dia == 1) {
        echo 'Es Lunes';
    } else {
        if($dia == 2) {
            echo 'Es Martes';
        } else {
            if($dia == 3) {
                echo 'Es Miercoles';
            } else {
                if($dia == 4) {
                    echo 'Es Jueves';
                } else {
                    if($dia == 5) {
                        echo 'Es Viernes';
                    } else {
                        echo 'Es fin de semana';
                    }
                }
            }
        }
    }
    */

    // Misma funcionalidad, optimizado, legible y corto
    // elseif
    if($dia == 1) {
        echo 'Es Lunes';
    } elseif($dia == 2) {
        echo 'Es Martes';
    } elseif($dia == 3) {
        echo 'Es Miercoles';
    } elseif($dia == 4) {
        echo 'Es Jueves';
    } elseif($dia == 5) {
        echo 'Es Viernes';
    } else {
        echo 'Es fin de semana';
    }

    echo '<br>';

    // Switch
    $dia = 7;

    switch($dia) {
        case 1:
            echo 'Lunes';
        break;
        case 2:
            echo 'Martes';
        break;
        case 3:
            echo 'Miercoles';
        break;
        case 4:
            echo 'Jueves';
        break;
        case 5:
            echo 'Viernes';
        break;
        default:
            echo 'Fin de semana'; 
    }

    echo '<br><hr>';

    // Ejemplo 5
    $edad1 = 18;
    $edad2 = 64;
    $edad_oficial = 20;

    if($edad_oficial >= $edad1 && $edad_oficial <= $edad2) {
        echo 'Esta en edad de trabajar';
    } else {
        echo 'No puede trabajar';
    }

    echo '<hr>';

    $pais = 'Colombia';
    if($pais == 'Mexico' || $pais == 'España' || $pais == 'Colombia') {
        echo 'En '.$pais.' se habla español';
    } else {
        echo 'No se habla español';
    }



    // GOTO
    goto marca;

    echo '<h3>Instruccion 1</h3>';
    echo '<h3>Instruccion 2</h3>';
    echo '<h3>Instruccion 3</h3>';
    echo '<h3>Instruccion 4</h3>';

    marca:
    echo '<h3>Me he saltado 4 echos</h3>';
?>