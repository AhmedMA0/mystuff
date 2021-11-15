<!DOCTYPE html>
<html>
    <body>
        <?php
            $a=$_POST['a'];

            echo 'Primero: ' , $a;

            $wd= ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];

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