<?php
/*
// Abrir archivo
$archivo = fopen('fichero_texto.txt', 'a+');

// Leer contenido
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo $contenido . '<br>';
}

// Escribir
fwrite($archivo, '<br>***Soy un texto metido desde PHP***');

// Cerrar archivo
fclose($archivo);

// Copiar
copy('fichero_texto.txt', 'fichero_copiado.txt') or die('Error al copiar.');

// Renombrar
rename('fichero_copiado.txt', 'archivito_recopiadito.txt');

// Eliminar
unlink('archivito_recopiadito.txt') or die('Error al borrar.');
*/

if (file_exists('fichero_texto.txt')) {
    echo 'El archivo existe';
} else {
    echo 'El archivo no existe';
}
