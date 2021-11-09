<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

        $bus=$_POST['bus'];
        $rem=$_POST['rem'];

        if (!isset($bus)&&!isset($rem)) {
            
            echo '<form action="#" method="POST">
            Introduce un numero a buscar: <input type="number" name="bus" autofocus><br>
            Introduce el numero con el que reemplazar: <input type="number" name="rem">
            <input type="submit" value="Continuar">
            </form>';
        }

        else {        
            for ($i=0; $i < 100; $i++) { 
                $nums[$i]=rand(0,20);
            }
    
            foreach ($nums as $b) {
                echo $b, '&nbsp';
            }

            $b=array_keys($nums,$bus);

            echo '<br>';

            for ($j=0; $j < count($b); $j++) { 
                $nums[$b[$j]]='<span style="color:red;">'.$rem.'</span>';
            }

            foreach ($nums as $b) {
                echo $b, '&nbsp';
            }
        }
        
    ?>
</body>
</html>