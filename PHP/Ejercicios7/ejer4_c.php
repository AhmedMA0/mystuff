<?php
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

        if (!isset($_COOKIE['login'])) {
            setcookie('login','falso',time() + 7*24*60*60);
            $_COOKIE['login']='falso';
            echo 'hola';
        }
        
        if (!isset($_COOKIE['user'])&&!isset($_COOKIE['pass'])) {
            setcookie('user','',time() + 7*24*60*60);
            setcookie('pass','',time() + 7*24*60*60);
            echo 'hihi';
        }

        if (!empty($_POST['user'])&&!empty($_POST['pass'])) {
            $_COOKIE['user']=$_POST['user'];
            $_COOKIE['pass']=$_POST['pass'];
            echo 'haha', $_POST['user'];
        }             

        
        if (empty($_POST['ini'])&&$_COOKIE['login']=='falso'){
            ?>
            <fieldset>
            <form action='#' method='POST'>
            Username(daw): <input type='text' name='user' autofocus>
            Password(daw123): <input type='text' name='pass' autofocus>
            <input type='submit' value='Log In' name='ini'>
            </form>
            </fieldset>
            <?php 
        }

        else {

            if (empty($_POST['user'])&&$_COOKIE['login']=='falso') {                
                ?>
                Username needed.
                <fieldset>
                <form action='#' method='POST'>
                Username(daw): <input type='text' name='user' autofocus>
                Password(daw123): <input type='text' name='pass' autofocus>
                <input type='submit' value='Log In' name='ini'>
                </form>
                </fieldset>
                <?php                
            }

            elseif (empty($_POST['pass'])&&$_COOKIE['login']=='falso') {
                ?>
                Password needed.
                <fieldset>
                <form action='#' method='POST'>
                Username(daw): <input type='text' name='user' autofocus>
                Password(daw123): <input type='text' name='pass' autofocus>
                <input type='submit' value='Log In' name='ini'>
                </form>
                </fieldset>
                <?php                    
            }

            else {
            
                echo $_COOKIE['user'];
                if ($_COOKIE['user']=='daw'||$_COOKIE['pass']=='daw123') {

                    setcookie('login',true,time() + 7*24*60*60);
                    $_COOKIE['login']=true;
                    echo $_COOKIE['login'];

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
                                echo $_COOKIE['total']/$_COOKIE['count'];
                                setcookie('total',0,time() - 3600);
                                setcookie('count',0,time() - 3600);
                                setcookie('pass',0,time() - 3600);
                                setcookie('user',0,time() - 3600);
                                setcookie('login',0,time() - 3600);


                            }
                        }
                    }
                }

                else {
                    echo 'ultimo';
                    ?>
                    <fieldset>
                    <form action='#' method='POST'>
                    Username(daw): <input type='text' name='user' autofocus>
                    Password(daw123): <input type='text' name='pass' autofocus>
                    <input type='submit' value='Log In' name='ini'>
                    </form>
                    </fieldset>
                    <?php 
                }
            }
        }
        
        ?>

    </body>
</html>