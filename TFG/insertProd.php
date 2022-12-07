<?php 
    require_once('clases/includes.php');

    if (isset($_POST['yes'])) {
        $name = $_POST['nombreProd'] ?? 'Sin nombre';
        $desc = $_POST['desc'] ?? 'Sin descripcion';
        $pvp = $_POST['precio'] ?? 'Sin PVP';
        $cat = $_POST['cat'] ?? 'NULL';
        //echo "<script>console.log('".$name.$desc.$pvp.$cat."')</script>";

        $prod= new Producto($name, $desc, $pvp, $cat);
        $prod->crearProd();
    }

    header('Location: ensenarProds.php');
?>