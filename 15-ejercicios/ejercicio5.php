<?php
/*
Crear un array con el contenido de la siguiente tabla:
ACCION  AVENTURA    DEPORTES
gta     assasins    fifa 19
cod     crash       pes 19
pubg    persia      moto gp

Cada columna debe ir a un fichero separado (includes)
*/
require_once 'aventura.php';
require_once 'accion.php';
require_once 'deporte.php';

echo '<table>';
echo '<tr>';
echo '<th>';
echo 'ACCION';
echo '</th>';
echo '<th>';
echo 'AVENTURA';
echo '</th>';
echo '<th>';
echo 'DEPORTE';
echo '</th>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo $accion[0];
echo '</td>';
echo '<td>';
echo $aventura[0];
echo '</td>';
echo '<td>';
echo $deporte[0];
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo $accion[1];
echo '</td>';
echo '<td>';
echo $aventura[1];
echo '</td>';
echo '<td>';
echo $deporte[1];
echo '</td>';
echo '</tr>';
echo '<tr>';
echo '<td>';
echo $accion[2];
echo '</td>';
echo '<td>';
echo $aventura[2];
echo '</td>';
echo '<td>';
echo $deporte[2];
echo '</td>';
echo '</tr>';
echo '</table>';
