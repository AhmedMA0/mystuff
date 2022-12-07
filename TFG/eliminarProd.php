<?php 
    require_once('clases/includes.php');
    //echo "<script>console.log('hola')</script>";//
    //echo "<script>console.log('".$name."')</script>";

    if (isset($_POST['yes'])) {
        $name = $_POST['idProd'];
        //echo "<script>console.log('".$name."')</script>";
        Producto::BorProd($name);
    }

    header('Location: ensenarProds.php');

?>