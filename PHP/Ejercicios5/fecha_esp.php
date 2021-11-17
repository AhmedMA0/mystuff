<!DOCTYPE html>
<html>
    <body>
        <?php

            $wd= ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'];

            $m = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

            echo $wd[date(w)], ', ', date(j),' de ' ,$m[date(n)-1], ' de ', date(Y);
        ?>
    </body>
</html>