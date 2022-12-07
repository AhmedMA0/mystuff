<?php
    require_once('clases/includes.php');

    if (isset($_POST['yes'])) {
        $name = $_POST['nombreCat'] ?? 'Sin nombre';
        
        $miCat = new Categoria($name, 0);
        $miCat->crearCat();

    }

    header('Location: ensenarProds.php');

?>