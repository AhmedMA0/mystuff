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
        //echo "<script>console.log('".$name."')</script>";

        if (isset($_POST['yes'])) {
            $name = $_POST['idProd'];
            //echo "<script>console.log('".$name."')</script>";
            Producto::BorProd($name);
        }

        header('Location: ensenarProds.php');

    ?>
</body>
</html>