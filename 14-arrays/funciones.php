<?php

$cantantes = ['2pac', 'Drake', 'JLo', 'Alfredo'];
$numeros = [1, 2, 5, 8, 3, 4];

// Ordenar
sort($numeros);
var_dump($numeros);
echo '<br>';
asort($cantantes);
var_dump($cantantes);
echo '<br>';

// Añadir elementos array
$cantantes[] = 'Natos';
array_push($cantantes, 'Waor');

// Eliminar ultimo elemento array
array_pop($cantantes);

// Eliminar determinado elemento array
unset($cantantes[2]);
var_dump($cantantes);
echo '<br>';

// Mostrar aleatorio
$indice = array_rand($cantantes);
echo $cantantes[$indice] . '<br>';

// Dar la vuelta
var_dump(array_reverse($numeros));
echo '<br>';

// Buscar dentro de array
$resultado = array_search('Drake', $cantantes);
var_dump($resultado);
echo '<br>';

// Contar numero de elementos
echo count($cantantes);
echo '<br>';
echo sizeof($numeros);
