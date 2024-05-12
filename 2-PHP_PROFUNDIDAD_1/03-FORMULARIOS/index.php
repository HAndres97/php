<!Doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario PHP y HTML</title>
    </head>
    <body>
        <h1>Formulario</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            <label for="name">Nombre:</label>
            <p><input type="text" name="nombre" minlength="2" placeholder="Nombre"></p>
            
            <label for="apellidos">Apellidos:</label>
            <!-- Dentro de input podemos poner varios restricciones o valores
                autofocus="autofocus" Para hacer un autofocus
                disabled="disabled"Desactivar un input
                minlength="5" Minimo de letras
                maxlength="20" Maximo de letras
                pattern = "[A-Z ]+" Permite solo letras mayusculas y espacios
                required Campo obligatorio
            -->
            <p><input type="text" name="apellidos" maxlength="20" placeholder="Apellidos"></p>
            <!-- Tipos de Campos -->
            <label for="boton">Boton:</label>
            <p><input type="button" name="boton" value="Click"></p>
            
            <label for="sexo">Sexo:</label>
            <p>
                Hombre<input type="checkbox" name="sexo" value="hombre">
                Mujer<input type="checkbox" name="sexo" value="mujer">
            </p>
            <label for="color">Color:</label>
            <p><input type="color" name="color"></p>
            
            <label for="fecha">Fecha:</label>
            <p><input type="date" name="fecha"></p>
            
            <label for="email">Email:</label>
            <p><input type="email" name="email"></p>
            
            <label for="archivo">Archivo:</label>
            <p><input type="file" name="archivo" multiple="multiple"></p>
            
            <label for="numero">Numero:</label>
            <p><input type="number" name="numero"></p>
            
            <label for="password">Password:</label>
            <p><input type="password" name="password"></p>
            
             <label for="continentes">Continente:</label>
            <p>
                America Sur<input type="radio" name="continente" value="America Sur">
                America Norte<input type="radio" name="continente" value="America Norte">
                Europa<input type="radio" name="continente" value="Europa">
               
            </p>
             <label for="pag_web">Página Web:</label>
            <p><input type="url" name="pag_web"></p>
            
            <label for="texto">Texto:</label>
            <p><textarea type="url" name="texto"></textarea></p>
            
            <label for="select">Select:</label>
            <p>
                <select name="peliculas">
                    <option value="Spiderman">Spiderman</option>
                    <option value="Spiderman">Spide</option>
                    <option value="Spiderman">man</option>
                    <option value="Spiderman">derman</option>
                    <option value="Spiderman">S</option>
                </select>
                
            </p>
            
            
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>

