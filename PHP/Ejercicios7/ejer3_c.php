<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
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
                    if ($_COOKIE['total']<10000) {
                        $num=abs($_POST['num']);

                        setcookie('total',$_COOKIE['total']+=$num,time() + 7*24*60*60);
                        setcookie('count',++$_COOKIE['count'],time() + 7*24*60*60);

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
                        setcookie('total',$_COOKIE['total']+=$num,time() + 7*24*60*60);
                        setcookie('count',++$_COOKIE['count'],time() + 7*24*60*60);

                        echo $_COOKIE['count'];

                        echo 'Total acumulado: ', $_COOKIE['total'], '<br>';
                        echo 'Media: ',$_COOKIE['total']/$_COOKIE['count'];
                        setcookie('total',0,time() - 3600);
                        setcookie('count',0,time() - 3600);
                    }
                }
            }
        ?>

    </body>
</html>