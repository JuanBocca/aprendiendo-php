<?php
/*
    ARRAY:
        Un array es una coleccion o conjunto de datos/valores
        bajo un unico nombre. Para acceder a esos valores podemos
        usar un indice numerico o alfanumerico.
    */

$pelicula = 'Batman';
$peliculas = array('Batman', 'Spiderman', 'LOTR');
$cantantes = ['2pac', 'Drake', 'JLo'];

// Array asociativo
$personas = array(
    'nombre' => 'Victor',
    'apellido' => 'Robles',
    'web' => 'www.google.com.uy'
);

echo '<pre>';
var_dump($personas['apellido']);
echo '</pre>';


// echo $peliculas[0];
// echo '<br>';
// echo $cantantes[2];

// Recorrer con FOR
echo '<h1>Listado de peliculas</h1>';

echo '<ul>';

for ($i = 0; $i < count($peliculas); $i++) {
    echo '<li>' . $peliculas[$i] . '</li>';
}

echo '</ul>';


// Recorrer con Foreach
echo '<h1>Listado de cantantes</h1>';

echo '<ul>';

foreach ($cantantes as $cantante) {
    echo '<li>' . $cantante . '</li>';
}

echo '</ul>';

// Array multidimensional
$contactos = array(
    array(
        'nombre' => 'Antonio',
        'email' => 'antonio@antonio.com'
    ),
    array(
        'nombre' => 'Luis',
        'email' => 'luis@luis.com'
    ),
    array(
        'nombre' => 'Salvador',
        'email' => 'salvador@salvador.com'
    )
);

// var_dump($contactos);
// echo $contactos[1]['nombre'];

foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}
