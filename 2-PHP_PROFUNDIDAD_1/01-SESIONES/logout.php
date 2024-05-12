<?php
session_start();

//Si queremos cerrar sesion, si accedemos a esta y volvemos a pagina1.php, nos saldra error
session_destroy();
