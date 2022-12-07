<?php 
    require_once('clases/includes.php');
    //echo "<script>console.log('hola')</script>";//".$name."
    //echo "<script>console.log('".$name."')</script>";

    if (isset($_POST['yes'])) {
        $idCat = $_POST['idCat'];
    //echo "<script>console.log('".$name."')</script>";

        Categoria::BorCat($idCat);
    }

    header('Location: ensenarProds.php');

?>
