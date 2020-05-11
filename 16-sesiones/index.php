<?php
/*
Una sesion almacena y persiste datos del usuario mientras que navega
en un sitio web hasta que cierra sesion o el navegador.
*/
// INICIAR LA SESION
session_start();

// Variable local
$variable_normal = 'Soy una cadena de texto';

// Variable de sesion
$_SESSION['variable_persistente'] = 'HOLA, SOY UNA SESION ACTIVA';

echo $variable_normal . '<br>';
echo $_SESSION['variable_persistente'];
