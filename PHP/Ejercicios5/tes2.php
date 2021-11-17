<!DOCTYPE html>
<html>
<<<<<<< HEAD
<body>
<?php
    echo '<table border=1><tr><th>Nombre</th><th>Valor</th></tr>';

    foreach($_SERVER as $c => $v ){
        echo '<tr><td>',$c.'</td>'.'<td>',$v.'</td>'.'</tr>';
    }

    echo '</table>';
=======
    <body>
        <?php
            $a=$_POST['a'];

            echo 'Primero: ' , $a;

            $wd= ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];
>>>>>>> ad2e13a3fc9f4029eafb1b439574fd68f5c90d60

            if (!isset($a)) {
                $a = serialize($wd);
            }
            ?>

            <form action='tess2.php' method='POST'>
            <input type='hidden' name='a' value='<?php echo $a;?>'>
            <input type="submit" value="Continuar">
            </form>

            <?php

            echo $a;
        ?>
    </body>
</html>