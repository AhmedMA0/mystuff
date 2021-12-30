<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="estilos.css">
    </head>
    <body>
        <h1>CIFRADO CESAR</h1>
        <form action="#" method="POST">
            <input type="text" name="cod">
            <input type="number" name="pos">
            <input type="submit" name="go" value="Go">
        </form>
        <?php
            include_once('functions.php');

            $abc = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','Ñ','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
            $pos = $_POST['pos'];

            $codigo = mb_strtoupper($_POST['cod'],'utf-8');
            $codigo = quitarAc($codigo);
            
            echo $codigo;

            echo '<br>';
            echo '<br>';
            echo '<br>';

            for ($i=0; $i < strlen($codigo); $i++) { 

                if ($codigo[$i]==' ') {
                    echo ' ';
                    continue;       
                }

                $key = array_search($codigo[$i], $abc);

                if ($key===false) {
                    continue;
                }

                for ($j=0; $j < $pos; $j++) { 

                    if ($key==count($abc)-1) {
                        $key=0;
                    }

                    else {
                        $key++;
                    }
                }

                echo $abc[$key];
            }
        ?>
    </body>
</html>