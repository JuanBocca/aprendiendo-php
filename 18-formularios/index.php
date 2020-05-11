<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formularios PHP y HTML</title>
</head>

<body>
    <h1>Formularios</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <p><input type="text" name="nombre"></p>

        <label for="apellido">Apellido:</label>
        <p><input type="text" name="apellido"></p>

        <label for="boton">Boton:</label>
        <p><input type="button" name="boton" value="Clickeame"></p>

        <label for="sexo">Sexo:</label>
        <p>
            Hombre <input type="checkbox" name="sexo" value="Hombre" checked="checked">
            Mujer <input type="checkbox" name="sexo" value="Mujer">
        </p>

        <label for="color">Color:</label>
        <p><input type="color" name="color"></p>

        <label for="fecha">Fecha:</label>
        <p><input type="date" name="fecha"></p>

        <label for="correo">Email:</label>
        <p><input type="email" name="correo"></p>

        <label for="archivo">Archivo:</label>
        <p><input type="file" name="archivo" multiple="multiple"></p>

        <label for="oculto">Oculto:</label>
        <p><input type="hidden" name="oculto"></p>

        <label for="numero">Numero:</label>
        <p><input type="number" name="numero"></p>

        <label for="pass">Contraseña:</label>
        <p><input type="password" name="pass"></p>

        <label for="continente">Continente:</label>
        <p>
            America del Sur <input type="radio" name="continente" value="America del Sur">
            America del Norte <input type="radio" name="continente" value="America del Norte">
            Europa <input type="radio" name="continente" value="Europa">
            Africa <input type="radio" name="continente" value="Africa">
            Asia <input type="radio" name="continente" value="Asia">
        </p>

        <label for="web">Pagina web:</label>
        <p><input type="url" name="web"></p>

        <textarea name="" id="" cols="30" rows="10"></textarea><br>

        Peliculas:
        <select name="peliculas">
            <option value="spiderman">Spiderman</option>
            <option value="spiderman">Batman</option>
            <option value="spiderman">Die Hard</option>
            <option value="spiderman">Gran Torino</option>
        </select><br>

        <input type="submit" value="Enviar">
    </form>
</body>

</html>