<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php

        $num=$_POST['num'];
        $count=$_POST['count'];
        $nums=$_POST['nums'];
        $pos1=$_POST['pos1'];
        $pos2=$_POST['pos2'];

        echo $count, '<br>';    

        if ($count<10) {
            
            $count++;
            echo '<form action="#" method="POST">
            Introduce un numero: <input type="number" name="num" autofocus>
            <input type="hidden" name="count" value="',$count,'">
            <input type="hidden" name="nums" value="',$nums.strval($num).'?','">
            <input type="submit" value="Continuar">
            </form>';

            $nums .= strval($num);

        }

        else {       
            
            if (!isset($pos1)||!isset($pos2)||$pos1>$pos2||$pos1<0||$pos1>9||$pos2<0||$pos2>9) {
            
                echo '<form action="#" method="POST">
                Introduce la primera posicion: <input type="number" name="pos1" autofocus>
                Introduce la segunda posicion: <input type="number" name="pos2">
                <input type="hidden" name="count" value="',$count,'">
                <input type="hidden" name="nums" value="',$nums.strval($num).'?','">
                <input type="submit" value="Continuar">
                </form>';
            }

            else {

                echo $pos1, $pos2;

                $nums .= strval($num);

                $nums2=explode("?",$nums);

                array_splice($nums2,0,1);

                $nums2= array_map('intval',$nums2);
                
                echo '<table border=1><th colspan="2">Antes: </th>';
                echo'<tr><th>Índice</th><th>Valor</th></tr>'; 

                for ($x=0; $x < 10; $x++) {
                    echo '<tr><td>',$x,'</td><td>',$nums2[$x],'</td></tr>';
                }
                echo '</table>';


                $aux=$nums2[$pos1-2];

                array_splice($nums2,$pos1-2,1);

                array_unshift($nums2,$aux);
                

                echo '<table border=1><th colspan="2">Despues: </th>';
                echo'<tr><th>Índice</th><th>Valor</th></tr>'; 

                for ($h=0; $h < 10; $h++) { 
                    echo '<tr><td>',$h,'</td><td>',$nums2[$h],'</td></tr>';
                }
                echo '</table>';
            }
        }
    ?>
</body>
</html>