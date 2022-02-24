<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        require_once('ejer2_funcs.php');
        
        $num=$_POST['num'];
        $decision=$_POST['a'];

        
        if ($decision==true) {

            echo bin2decimal($num);            
        }

        else {

            echo dec2bin($num);
        }


        ?>
        <form action='#' method='POST'>
        <input type='number' name='num' autofocus>
        De binario a decimal: <input type='radio' name='a' value='1'>
        De decimal a binario: <input type='radio' name='a' value='0'>

        <input type='submit' value='go'>
        </form>
        <?php
    




    ?>
</body>
</html>