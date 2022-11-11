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
        
        ?>
    </body>
</html>