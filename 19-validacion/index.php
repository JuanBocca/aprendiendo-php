<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validacion de formularios</title>
</head>

<body>
    <h1>Validar formularios en PHP</h1>

    <?php
    if (isset($_GET['error'])) {
        $error = $_GET['error'];
        if ($error == 'faltan_valores') {
            echo '<strong style="color:red">Introduce todos los datos en todos los campos.</strong>';
        }

        if ($error == 'nombre') {
            echo '<strong style="color:red">Introduce bien el nombre.</strong>';
        }

        if ($error == 'apellido') {
            echo '<strong style="color:red">Introduce bien el apellido.</strong>';
        }

        if ($error == 'edad') {
            echo '<strong style="color:red">Introduce bien la edad.</strong>';
        }

        if ($error == 'email') {
            echo '<strong style="color:red">Introduce bien el correo.</strong>';
        }

        if ($error == 'password') {
            echo '<strong style="color:red">Introduce bien la contraseña (Mayor a 5 carácteres).</strong>';
        }
    }
    ?>

    <form action="procesar_formulario.php" method="POST">
        <label for="nombre">Nombre: </label>
        <p><input type="text" name="nombre" required="required" pattern="[a-zA-Z]+"></p>

        <label for="apellido">Apellido: </label>
        <p><input type="text" name="apellido" required="required" pattern="[a-zA-Z]+"></p>

        <label for="edad">Edad: </label>
        <p><input type="number" name="edad" required="required" pattern="[0-9]+"></p>

        <label for="email">Email: </label>
        <p><input type="email" name="email" required="required"></p>

        <label for="pass">Contraseña: </label>
        <p><input type="password" name="pass" required="required" minlength="5"></p>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>