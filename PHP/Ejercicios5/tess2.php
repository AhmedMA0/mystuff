<!DOCTYPE html>
<html>
    <body>
        <?php
            $a=["uno" => 1, "dos" => 2, "tres" => 3];

            echo $a['uno'];

            $a["uno"]=2;

            echo '<br>', $a["uno"];
        ?>
    </body>
</html>