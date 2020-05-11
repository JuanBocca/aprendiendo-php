<?php
/*
Hacer interfaz de usuario (formulario) con dos imputs y cuatro botones
sumar, restar, dividir y multiplicar.
*/
$resultado = false;

if (isset($_POST['n1']) && isset($_POST['n2'])) {

    if (isset($_POST['sumar'])) {
        $resultado = 'El resultado es: ' . ($_POST['n1'] + $_POST['n2']);
    }
    if (isset($_POST['restar'])) {
        $resultado = 'El resultado es: ' . ($_POST['n1'] - $_POST['n2']);
    }
    if (isset($_POST['dividir'])) {
        $resultado = 'El resultado es: ' . ($_POST['n1'] / $_POST['n2']);
    }
    if (isset($_POST['multiplicar'])) {
        $resultado = 'El resultado es: ' . ($_POST['n1'] * $_POST['n2']);
    }
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>

<body>
    <h1>Calculadora PHP</h1>

    <form method="post">
        <label for="n1">Numero 1: </label><br>
        <input type="number" name="n1"><br>

        <label for="n2">Numero 2: </label><br>
        <input type="number" name="n2"><br><br>

        <input type="submit" value="Sumar" name="sumar">
        <input type="submit" value="Restar" name="restar">
        <input type="submit" value="Dividir" name="dividir">
        <input type="submit" value="Multiplicar" name="multiplicar">
    </form>

    <?php
    if ($resultado != false) {
        echo '<h2>' . $resultado . '</h2>';
    }
    ?>
</body>

</html>