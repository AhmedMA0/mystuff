<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        //abrimos la conexion a base de datos con mysqli
        $conexion = new mysqli('localhost', 'ahmed', '123456', 'mosushi');

        if (isset($_POST['yes'])) {
            $name = $_POST['nombreCat'] ?? 'Sin nombre';
            
            $insert = $conexion->stmt_init();
            $insert->prepare("INSERT INTO categoria (nombre) VALUES ('".$name."');");
            $insert->execute();

            $insert->close();
            $conexion->close();
        }

        header('Location: ensenarProds.php');

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Nueva categoria</title>
</head>
</html>