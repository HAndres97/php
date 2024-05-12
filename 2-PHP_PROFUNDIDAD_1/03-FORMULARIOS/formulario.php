<!Doctype html>
<html>
    <head>
        <title>Formulario Para Validar</title>
    </head>
    <body>
        <h1>Formulario para validar</h1>
        <form action="guardar.php" method="POST">
            <label>Titulo</label>
            <p>
                <input type="text" name="titulo">
            </p>
            <label>Texto</label>
            <p><textarea name="descripcion"></textarea></p>
            <p>
            <input type="submit" value="Enviar">
            </p>
        </form>
    </body>
</html>
