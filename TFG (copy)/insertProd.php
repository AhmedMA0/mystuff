<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Nuevo producto</title>
</head>
<body>
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
</body>
</html>