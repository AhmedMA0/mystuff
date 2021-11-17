<?php

$num1=$_POST['num1'];
$num2=$_POST['num2'];


do{
    if ((!isset($num1))&&(!isset($num2))) {
        # code...
    
    ?>

        <form action="ejercicio4.php" method="post">
        Introduce dos numeros: <br><br>
        <input type="text" name="num1"><br><br>
        <input type="text" name="num2"><br><br>
        <input type="submit" value="Enviar">
        </form>

    <?php
    }
        if($num1==$num2){
            echo "Los numeros son iguales intentalo de nuevo";
        }

}while($num1==$num2);

for ($i=$num1; $i <= $num2 ; $i++) {
    echo $i, " ";
}
?>