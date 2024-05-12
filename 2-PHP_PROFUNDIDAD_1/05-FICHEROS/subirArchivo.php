<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Subir Archivos</title>
    </head>
    <body>
        <h1>Subir Archivos</h1>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="archivo">
            <input type="submit">
        </form>
        <h1>Listado de imagenes</h1>
        <?php
        $gestor = opendir('./images');
            if($gestor){
                while(($image = readdir($gestor)) !== false){
                    if($image != '.' && $image != '..'){
                        echo "<img src='images/$image' width ='200px'><br>";
                    }
                }
            }
        ?>
    </body>
</html>

