<?php
/*
1- Una funcion
2- Validar un email con filter_var
3- Recoger variable por GET y validarla
4- Mostrar resultado
*/

function validarEmail($email)
{
    $status = 'No valido.';

    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $status = 'Valido.';
    }

    return $status;
}

if (isset($_GET['email'])) {
    echo validarEmail($_GET['email']);
} else {
    echo 'Pasa por GET un email!';
}
