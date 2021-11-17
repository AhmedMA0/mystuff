<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php

            $num1=$_POST['num1'];
            $num2=$_POST['num2'];


            if (!isset($num1)&&!isset($num2)) {
                
                echo '<form action="#" method="POST">
                Introduce numero: <input type="number" name="num1" autofocus>
                Introduce numero: <input type="number" name="num2">
                <input type="submit" value="Continuar">
                </form>';

            }

            else {        
                for ($i=$num1; $i <= $num2; $i++) { 
                    echo $i;
                }
            }
        ?>
    </body>
</html>