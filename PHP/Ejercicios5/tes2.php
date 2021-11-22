<!DOCTYPE html>
<html>
    <body>
        <?php
        $n=$_POST['aa'];
        $a=$_POST['a'];
        
        if (!empty($a)) {
            $array=unserialize($a);
        }

        if (!isset($array)) {
            $array=[];
        }   

        if (!empty($n)) {
            array_push($array, $n);
        }

        $b = serialize($array);

        print_r($array);


            ?>
            <form action='tes2.php' method='POST'>
            <input type='number' name='aa'>
            <input type='hidden' name='a' value='<?php echo $b;?>'>
            <input type='submit' value='Continuar'>
            </form>
            <?php
        ?>
    </body>
</html>