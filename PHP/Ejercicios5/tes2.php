<!DOCTYPE html>
<html>
    <body>
        <?php

        $wd= ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];

        $a = serialize($wd);



            
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