<?php
/*
Programa que comprebe si variable esta vacia, si esta vacia rellenarla con texto
en minusculas y mostrarlo en mayusculas y negrita.
*/

$var = '';

if (empty($var)) {
    $var = 'Hola, esta variable esta vacia, asi que la relleno. Estoy escrito originalmente en minuscula';
}

echo '<strong>' . strtoupper($var) . '</strong>';
