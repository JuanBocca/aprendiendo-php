<?php
// Debuggear
$nombre = 'Juan';
var_dump($nombre);

// Fechas
echo '<br>';
echo date('d-m-Y');
echo '<br>';
echo time();

// Matematicas
echo '<br>';
echo 'Raiz cuadrada de 10: ' . sqrt(10);
echo '<br>';
echo 'Numero aleatorio entre 10 y 40: ' . rand(10, 40);
echo '<br>';
echo 'Numero pi: ' . pi();
echo '<br>';
echo 'Redondear: ' . round(7.891234, 2);

// FUNCIONES GENERALES
echo '<br>';

// Detectar tipos
echo gettype($nombre);
echo '<br>';

if (is_string($nombre)) {
    echo 'Esa variable es string';
}
echo '<br>';
if (!is_float($nombre)) {
    echo 'La variable no es un numero con decimales';
}

// Comprar si existe variable
echo '<br>';
if (isset($nombre)) {
    echo 'La variable existe';
} else {
    echo 'La variable no existe';
}

// Limpiar espacios extras
echo '<br>';
$frase = '      mi contenido        ';
var_dump(trim($frase));

// Eliminar variables / indices
echo '<br>';
$year = 2020;
unset($year);

// Comprobar variable vacia
echo '<br>';
$texto = '';

if (empty($texto)) {
    echo 'La variable $texto esta vacia';
} else {
    echo 'La variable tiene contenido';
}

// Contar caracteres de un string
echo '<br>';
$cadena = '12345';
echo strlen($cadena);

// Encontrar caracter
echo '<br>';
$frase = 'La vida es bella';
echo strpos($frase, 'vida');

// Reemplazar palabras de un string
echo '<br>';
$frase = str_replace('vida', 'moto', $frase);
echo $frase;

// MAYUSCULAS y minusculas
echo '<br>';
echo strtolower($frase);
echo '<br>';
echo strtoupper($frase);
