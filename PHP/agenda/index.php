<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <h1>MI AGENDA</h1>
        <?php
            $agenda=unserialize($_POST['myarray']);

            if (empty($_POST['go'])){

                ?>
                <fieldset>
                <form action='#' method='POST'>
                    Introduce un nombre: <input type='text' name='nombre' autofocus>
                    Introduce su numero de tlf: <input type='number' name='tlf'>
                    <input type='submit' value='Registrar' name='go'>
                    </form>
                </fieldset>
                <?php
            }

            else {
                $nombre=$_POST['nombre'];
                $tlf=$_POST['tlf'];            
            
                if (empty($nombre)) {
                    
                    echo '<h3>Debes introducir un nombre antes de continuar</h3> <br>';
                    ?>
                    <fieldset>
                    <form action='#' method='POST'>
                    Introduce un nombre: <input type='text' name='nombre' autofocus>
                    Introduce su numero de tlf: <input type='number' name='tlf'>
                    <input type='hidden' name='myarray' value='<?php echo serialize($agenda)?>'>
                    <input type='submit' value='Registrar' name='go'>
                    </form>
                    </fieldset>

                    <br>
                    <br>
                    <br>

                    <table> <th>Nombre</th> <th>Teléfonos</th>
                    <?php
                    
                    foreach ($agenda as $nombre => $tele) {
                        echo '<tr><td>',$nombre,'</td><td>',$tele,'</td></tr>';
                    }
                    
                    ?>
                    </table>
                    <?php
                }

                else{

                    if (!empty($tlf)&&!empty($nombre)) {
                        $agenda[$nombre]=$tlf;
                    }

                    elseif (empty($tlf)&&!empty($nombre)&&array_key_exists($nombre,$agenda)) {
                        unset($agenda[$nombre]);
                    }
                    ?>
                    <fieldset>
                    <form action='#' method='POST'>
                    Introduce un nombre: <input type='text' name='nombre' autofocus>
                    Introduce su numero de tlf: <input type='number' name='tlf'>
                    <input type='hidden' name='myarray' value='<?php echo serialize($agenda)?>'>
                    <input type='submit' value='Registrar' name='go'>
                    </form>
                    </fieldset>
                    
                    <br>
                    <br>
                    <br>

                    <table> <th>Nombre</th> <th>Teléfonos</th>
                    <?php
                    
                    foreach ($agenda as $nombre => $tele) {
                        echo '<tr><td>',$nombre,'</td><td>',$tele,'</td></tr>';
                    }
                    
                    ?>
                    </table>
                    <?php
                }
            }
        ?>
    </body>
</html>