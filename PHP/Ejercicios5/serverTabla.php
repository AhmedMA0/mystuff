<!DOCTYPE html>
<html>
<body>
<?php
    echo '<table border=1><tr><th>Nombre</th><th>Valor</th></tr>';

    foreach($_SERVER as $c => $v ){
        echo '<tr><td>',$c.'</td>'.'<td>',$v.'</td>'.'</tr>';
    }

    echo '</table>';

?>
</body>
</html>