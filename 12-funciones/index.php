<?php
    /*
        FUNCIONES:
    Es un conjunto de intrucciones agrupadas bajo un nombre
    concreto, que pueden reutilizarse invocando a la funcion
    tantas veces como querramos, sin repetir codigo.
    */

    /*
    function nombreDeMiFuncion(parametros opcionales) {
        instrucciones;
    }

    nombreDeMiFuncion(Si tiene, pasamos parametro);
    */

    //Ejemplo 1
    function muestraNombres() {
        echo 'Juan Carlos<br>';
        echo 'Juan Jose<br>';
        echo 'Juan Agustin<br>';
        echo 'Juan Pedro<hr>';
    }

    // Invocar funcion
    muestraNombres();

    // Ejemplo 2
    function tabla($numero) {
        echo '<h3>Tabla de multiplicar del numero: '.$numero.'</h3>';
        for($i = 1; $i <= 10; $i++) {
            $operacion = ($numero*$i);

            echo $numero.' x '.$i.' = '.$operacion.'<br>';
        }
    }

    if(isset($_GET['numero'])) {
        tabla($_GET['numero']);
        echo '<hr>';
    } else {
        echo 'Debes pasar parametro GET<hr>';
    }

    for($i = 1; $i <= 10; $i++) {
        tabla($i);
    }

    // Ejemplo 3
    function calculadora($numero1, $numero2, $negrita = false) {
        //  Conjunto de instrucciones
        echo '<hr>';

        $cadenaTexto = '';

        if($negrita) {
            $cadenaTexto .= '<h1>';
        }
        $cadenaTexto .= 'Suma: '.$numero1.' + '.$numero2.' = '.($numero1+$numero2).'<br>';
        $cadenaTexto .= 'Resta: '.$numero1.' - '.$numero2.' = '.($numero1-$numero2).'<br>';
        $cadenaTexto .= 'Multiplicacion: '.$numero1.' x '.$numero2.' = '.($numero1*$numero2).'<br>';
        $cadenaTexto .= 'Division: '.$numero1.' % '.$numero2.' = '.($numero1/$numero2).'<br>';

        if($negrita) {
            $cadenaTexto .= '</h1>';
        }

        return $cadenaTexto;
    }

    echo calculadora(10, 30, true);

    // Ejemplo 4
    function getNombre($nombre) {
        $texto = 'El nombre es '.$nombre;

        return $texto;
    }
    function getApellido($apellido) {
        $texto = 'El apellido es '.$apellido;

        return $texto;
    }
    function devuelveElNombre($nombre, $apellido) {
        $texto = getNombre($nombre)
                .'<br>'.
                getApellido($apellido);
                
        return $texto;
    }

    echo devuelveElNombre('Juan', 'Bocca');
?>