<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        //abrimos la conexion a base de datos con mysqli
        $conexion = new mysqli('localhost', 'ahmed', '123456', 'mosushi');
        //echo "<script>console.log('hola')</script>";//".$name."
        //echo "<script>console.log('".$name."')</script>";

        if (isset($_POST['yes'])) {
            $idCat = $_POST['idCat'];
        //echo "<script>console.log('".$name."')</script>";

            $update = $conexion->stmt_init();
            $update->prepare("delete from categoria where id = '".$idCat."';");
            $update->execute();

            $update->close();
            $conexion->close();
        }

        header('Location: ensenarProds.php');

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Update</title>
</head>
</html>