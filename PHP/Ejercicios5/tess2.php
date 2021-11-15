<!DOCTYPE html>
<html>
    <body>
        <?php
            $a=$_POST['a'];

            echo $a;

            $b=unserialize($a);

            foreach ($b as $h => $j) {
                echo $h,'-->',$j;
            }
        ?>
    </body>
</html>