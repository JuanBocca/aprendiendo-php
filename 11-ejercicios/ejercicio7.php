<?php
    /*
    Mostrar todos los numeros IMPARES entre dos numeros
    que lleguen por $_GET
    */

    if(isset($_GET['numero1']) && isset($_GET['numero2'])) {
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];

        if($numero1 < $numero2) {
            while($numero1 <= $numero2) {
                if($numero1%2 != 0) {
                    echo $numero1.'<br>';
                }
                $numero1++;
            }
        } else {
            while($numero2 <= $numero1) {
                if($numero2%2 != 0) {
                    echo $numero2.'<br>';
                }
                $numero2++;
            }
        }
    } else {
        echo '<h1>Debes pasar parametros GET</h1>';
    }
?>