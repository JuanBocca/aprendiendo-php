<?php
/*
Escribir programa que añada valor a un array mientras su longitud
sea menor a 120 y luego mostrarlo
*/

$numeros = array();

for ($i = 0; $i < 120; $i++) {
    array_push($numeros, $i);
}
var_dump($numeros);
