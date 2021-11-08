<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

        for ($i=0; $i < 20; $i++) { 
            $nums[$i]=rand(0,100);
        }

        for ($j=0; $j < 20; $j++) { 

            if ($nums[$j]%2==0) {

                $aux=$nums[$j];

                array_splice($nums,$j,1);

                array_unshift($nums,$aux);

            }
        }

        foreach ($nums as $b) {
           echo $b, ', ';
        }
    ?>
</body>
</html>