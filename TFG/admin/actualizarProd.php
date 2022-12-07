<?php 
    require_once('../clases/includesAdmin.php');
    //echo "<script>console.log('hola')</script>";//

    if (isset($_POST['yes'])) {
        $name = $_POST['nombre'];
        $desc = $_POST['desc'] ?? 'Sin descripcion';
        $pvp = $_POST['precio'] ?? 0.00;
    //echo "<script>console.log('".$name.$desc.$pvp."')</script>";

        Producto::actProd($desc, $pvp, $name);
    }

    header('Location: ensenarProds.php');

?>