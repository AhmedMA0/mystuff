<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        //abrimos la conexion a base de datos con mysqli
        $conexion = new mysqli('localhost', 'ahmed', '123456.A', 'dwes');

        if (isset($_POST['up'])) {
            $name = $_POST['na'] ?? 'Sin nombre';
            $nameS = $_POST['naS'] ?? 'Sin nombre corto';
            $desc = $_POST['desc'] ?? 'Sin descripcion';
            $pvp = $_POST['pvp'] ?? 'Sin PVP';

            $update = $conexion->stmt_init();
            $update->prepare("update producto set nombre ='".$name."', nombre_corto ='".$nameS."', descripcion ='".$desc."', PVP ='".$pvp."' where cod ='".$_POST['cod']."';");
            $update->execute();

            $update->close();
            $conexion->close();
        }

        header('Location: index.php');

    ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Update</title>
</head>
</html>