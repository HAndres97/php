<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario PHP</title>
        <link rel="stylesheet">
    </head>
    <body>
        <h1>Formulario PHP en GET</h1>
        <form method="GET" action="recibir.php">
            <p>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre">
            </p>
            <p>
                <label for="apellidos">Apellidos:</label>
                <input type="text" name="apellidos">
            </p>
            <input type="submit" value="Enviar">
        </form>
         <h2>Formulario PHP en POST</h2>
        <form method="POST" action="recibir.php">
            <p>
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre_1">
            </p>
            <p>
                <label for="apellidos">Apellidos:</label>
                <input type="text" name="apellidos_1">
            </p>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>

