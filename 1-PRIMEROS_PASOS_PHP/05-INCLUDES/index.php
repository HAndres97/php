<?php
    include 'includes/cabecera.php'; // Se lee de arriba hacia abajo, el include de arriba tambien forma parte al de abajo
    // Tambien podemos llamr a variables y funciones creados en esos ficheros
   
?>
        <!-- Contenido -->
        <div>
            <h2>Pagina de inicio</h2>
            <p>Texto de prueba</p>
        </div>
<?= include 'includes/footer.php';

// include_once solo lo incluye una vez
//requiere es mas restrictivo, si falla se corta la ejecución
//requiere_once lo mismo
?>
