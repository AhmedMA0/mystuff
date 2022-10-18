<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
        //abrimos la conexion a base de datos con mysqli
        $conexion = new mysqli('localhost', 'ahmed', '123456', 'mosushi');

        if (isset($_POST['yes'])) {
            $name = $_POST['nombreProd'] ?? 'Sin nombre';
            $desc = $_POST['desc'] ?? 'Sin descripcion';
            $pvp = $_POST['precio'] ?? 'Sin PVP';
            $cat = $_POST['cat'] ?? 'NULL';
            //echo "<script>console.log('".$name.$desc.$pvp.$cat."')</script>";

            $insert = $conexion->stmt_init();
            $insert->prepare("INSERT INTO producto (nombre, descr, precio, idCat) VALUES ('".$name."','".$desc."','".$pvp."','".$cat."');");
            $insert->execute();
            echo "<script>console.log('hola')</script>";

            $insert->close();
            $conexion->close();
        }

        header('Location: ensenarProds.php');

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Nuevo producto</title>
</head>
</html>