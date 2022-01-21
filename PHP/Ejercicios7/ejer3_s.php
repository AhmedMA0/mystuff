<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');

    if (!isset($_SESSION['on'])) {
        session_start();
        $_SESSION['on']=true;
    }

    if (!isset($_SESSION['total'])&&!isset($_SESSION['count'])) {
        $_SESSION['total']=0;
        $_SESSION['count']=0;
    }
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
            if (empty($_POST['go'])){
                ?>
                <fieldset>
                <form action='#' method='POST'>
                <input type='number' name='num' autofocus>
                <input type='submit' value='GoGoGo' name='go'>
                </form>
                </fieldset>
                <?php
            }
            else {
                
                if (empty($_POST['num'])) {                
                    ?>
                    <fieldset>
                    <form action='#' method='POST'>
                    <input type='number' name='num' autofocus>
                    <input type='submit' value='GoGoGo' name='go'>
                    </form>
                    </fieldset>
                    <?php
                }

                else {
                    if ($_SESSION['total']<10000) {
                        $num=abs($_POST['num']);
                
                        $_SESSION['total']+=$num;
                        $_SESSION['count']++;

                        ?>
                        <fieldset>
                        <form action='#' method='POST'>
                        <input type='number' name='num' autofocus>
                        <input type='submit' value='GoGoGo' name='go'>
                        </form>
                        </fieldset>
                        <?php
                    }

                    else {
                        $num=abs($_POST['num']);
                        $_SESSION['total']+=$num;
                        $_SESSION['count']++;

                        echo 'Total acumulado: ', $_SESSION['total'], '<br>';
                        echo 'Media: ',$_SESSION['total']/$_SESSION['count'];
                        session_unset();
                        session_destroy();
                    }
                }
            }
        ?>

    </body>
</html>