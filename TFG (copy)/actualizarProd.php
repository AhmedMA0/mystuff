<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Update</title>
</head>
<body>
    <?php 
        require_once('clases/includes.php');
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
</body>
</html>