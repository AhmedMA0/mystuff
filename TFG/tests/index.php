<!DOCTYPE html>
<html>
    <body>
        <script>
            function hola() {
                console.log('hola');
                document.write(<?php $a = 'a'; $b = 'b'; $c = $a.$b; echo "'".$c."'"; ?>)
            }
            hola();
        </script>
        <?php
            $string1 = 'Producto Fry_Atun';
            $string2 = 'Producto';

            echo strpos($string1, $string2);
        ?>
    </body>
</html>