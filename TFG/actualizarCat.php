<?php 
    require_once('clases/includes.php');

    //echo "<script>console.log('hola')</script>";//".$name.$desc.$pvp."
    //echo "<script>console.log('".$name."')</script>";

    if (isset($_POST['yes'])) {
        $name = $_POST['nombre'];
        $idCat = $_POST['idCat'];

    //echo "<script>console.log('".$name.$desc.$pvp."')</script>";

        Categoria::actCat($idCat, $name);
    }

    header('Location: ensenarCats.php');

?>