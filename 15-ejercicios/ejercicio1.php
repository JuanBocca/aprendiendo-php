<?php
/*
Ejercicio 1:
    Hacer programa PHP que tenga un array con 8 numeros enteros y:
    1- Recorrerlo y mostrar
    2- Ordenarlo y mostrar
    3- Mostrar longitud
    4- Buscar algun elemento y mostrar
*/

$numeros = [1, 3, 30, 4, 2, 6, 10, 8];

function mostrarArray($numeros)
{
    $resultado = "";

    foreach ($numeros as $numero) {
        $resultado .= $numero . '<br>';
    }
    return $resultado;
}

// 1)
echo '<h1>Mostrando array:</h1>';
echo mostrarArray($numeros);

// 2)
echo '<h1>Mostrando array ordenado:</h1>';
sort($numeros);
echo mostrarArray($numeros);

// 3)
echo '<h1>La longitud del array es de: ' . count($numeros) . ' elementos.</h1>';

// 4)
$random = array_rand($numeros);
echo '<h1>El elemento ' . $random . ' esta en la posicion: ' . array_search($random, $numeros) . '</h1>';
