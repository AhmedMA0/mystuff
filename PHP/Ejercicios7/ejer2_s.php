<?php
    if (!isset($_SESSION['on'])) {
        session_start();
        $_SESSION['on']=true;
    }

    error_reporting(E_ALL);
    ini_set('display_errors', '1');
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
                    if ($_POST['num']>0) {
                        $num=$_POST['num'];
                
                        if (!isset($_SESSION['total'])&&!isset($_SESSION['count'])&&!isset($_SESSION['hPar'])) {
                            $_SESSION['total']=0;
                            $_SESSION['count']=0;
                            $_SESSION['hPar']=0;
                        }

                        if ($num % 2 ==0) {
                            if ($num>$_SESSION['hPar']) {
                                $_SESSION['hPar']= $num;
                            }
                        }

                        else {
                            $_SESSION['total']+=$num;
                            $_SESSION['count']++;
                        }

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

                        echo 'Media Impares: ',$_SESSION['total']/$_SESSION['count'];
                        echo '<br> Mayor par: ', $_SESSION['hPar'];
                        session_unset();
                        session_destroy();
                    }
                }
            }
        ?>

    </body>
</html>