<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
            error_reporting(E_ALL);
            ini_set('display_errors', '1');

            if (!isset($_COOKIE['total'])&&!isset($_COOKIE['count'])) {
                setcookie('count',0,time() + 7*24*60*60);
                setcookie('total',0,time() + 7*24*60*60);
            }

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

                        setcookie('total',$_COOKIE['total']+=$num,time() + 7*24*60*60);
                        setcookie('count',$_COOKIE['count']+1,time() + 7*24*60*60);

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
                        echo $_COOKIE['total']/$_COOKIE['count'];
                        setcookie('total',0,time() - 3600);
                        setcookie('count',0,time() - 3600);
                    }
                }
            }
        ?>

    </body>
</html>