<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require_once('clases/includes.php');

        if (isset($_POST['yes'])) {
            $name = $_POST['nombreProd'] ?? 'Sin nombre';
            $desc = $_POST['desc'] ?? 'Sin descripcion';
            $pvp = $_POST['precio'] ?? 'Sin PVP';
            $cat = $_POST['cat'] ?? 'NULL';
            //echo "<script>console.log('".$name.$desc.$pvp.$cat."')</script>";

            Producto::crearProd($name, $desc, $pvp, $cat);
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