<?php
/*
Cookie: Es un fichero que se almacena en el ordenador del usuario
que visita la web, con el fin de recordar datos o rastrear informacion
o comportamiento del mismo en la web.
*/
// Crear cookie
// setcookie('nombre', 'valor que solo puede ser texto', caducidad, ruta, dominio);

// Cookie basica
setcookie('micookie', 'valor de mi galleta');

// Cookie con expiracion
setcookie('unyear', 'Valor de mi cookie de 365 dias', time() + (60 * 60 * 24 * 365));

header('Location: ver_cookies.php');
