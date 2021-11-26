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
            //intentamos recibir los datos de nuestra agenda, en ese caso un array, y si no existe no pasa nada malo por mi estructura de condicionales y tal
            $agenda=unserialize($_POST['myarray']);

            //si el usuario aun no ha intentado enviar datos le mostramos el formulario 
            if (empty($_POST['go'])){

                ?>
                <fieldset>
                <form action='#' method='POST'>
                    Introduce un nombre: <input type='text' name='nombre' autofocus>
                    Introduce su numero de tlf: <input type='text' name='tlf' pattern="(\+[0-9])?[0-9]{9}">
                    <input type='submit' value='Registrar' name='go'>
                    </form>
                </fieldset>
                <?php
            }

            //si el usuario ya ha intentado enviar datos se ejecuta el resto del programa
            else {
                //se intentan recibir los datos que el usuario ha intentado enviar
                $nombre=$_POST['nombre'];
                $tlf=$_POST['tlf'];            
            
                //si el nombre esta vacio se obliga al usuario ha introducirlo y no se continua hasta que lo haga
                if (empty($nombre)) {
                    
                    echo '<h3>Debes introducir un nombre antes de continuar</h3> <br>';
                    ?>
                    <fieldset>
                    <form action='#' method='POST'>
                    Introduce un nombre: <input type='text' name='nombre' autofocus>
                    Introduce su numero de tlf: <input type='text' name='tlf' pattern="(\+[0-9])?[0-9]{9}">
                    <input type='hidden' name='myarray' value='<?php echo serialize($agenda)?>'>
                    <input type='submit' value='Registrar' name='go'>
                    </form>
                    </fieldset>

                    <br>
                    <br>
                    <br>
                    <!-- Aqui mostramos la agenda por pantalla en el caso de que haya datos en ella-->
                    <table> <th>NOMBRE</th> <th>TELÉFONOS</th>
                    <?php
                    
                    foreach ($agenda as $nombre => $tele) {
                        echo '<tr><td>',$nombre,'</td><td>',$tele,'</td></tr>';
                    }
                    
                    ?>
                    </table>
                    <?php
                }

                //si se ha introducido un nombre realizamos otras comprobaciones para realizar una accion u otra dependiendo de la accion del usuario
                else{

                    //si ambos datos han sido correctamente introducidos se añaden al array, es decir, a la agenda.
                    //esto tambien significa que si se mete una clave que ya existe se sustituya su valor por el nuevo tlf
                    if (!empty($tlf)&&!empty($nombre)) {
                        $agenda[$nombre]=$tlf;
                    }

                    //si el telefono esta vacio y se introuce un nombre que ademas esta ya en la agenda, se borra esa entrada
                    elseif (empty($tlf)&&!empty($nombre)&&array_key_exists($nombre,$agenda)) {
                        unset($agenda[$nombre]);
                    }
                    ?>
                    
                    <!-- el formulario que siempre se enseña para poder seguir metiendo datos-->
                    <fieldset>
                    <form action='#' method='POST'>
                    Introduce un nombre: <input type='text' name='nombre' autofocus>
                    Introduce su numero de tlf: <input type='text' name='tlf' pattern="(\+[0-9])?[0-9]{9}">
                    <input type='hidden' name='myarray' value='<?php echo serialize($agenda)?>'>
                    <input type='submit' value='Registrar' name='go'>
                    </form>
                    </fieldset>

                    <br>
                    <br>
                    <br>

                    <!-- Aqui mostramos la agenda por pantalla en el caso de que haya datos en ella-->
                    <table> <th>NOMBRE</th> <th>TELÉFONOS</th>
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