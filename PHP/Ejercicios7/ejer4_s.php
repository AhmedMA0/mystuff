<?php
    if (!isset($_SESSION['on'])) {
        session_start();
        $_SESSION['on']=true;
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

        if (!isset($_SESSION['login'])) {
            $_SESSION['login']=false;
        }
        
        if (!isset($_SESSION['user'])&&!isset($_SESSION['pass'])) {
            $_SESSION['user']='';
            $_SESSION['pass']='';
        }

        if (!empty($_POST['user'])&&!empty($_POST['pass'])) {
            $_SESSION['user'] = $_POST['user'];
            $_SESSION['pass'] = $_POST['pass'];
        }             

        
        if (empty($_POST['ini'])&&!$_SESSION['login']){
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

            if (empty($_POST['user'])&&!$_SESSION['login']) {                
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

            elseif (empty($_POST['pass'])&&!$_SESSION['login']) {
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
            
                if ($_SESSION['user']=='daw'||$_SESSION['pass']=='daw123') {

                    $_SESSION['login']=true;

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
                        
                                if (!isset($_SESSION['total'])&&!isset($_SESSION['count'])) {
                                    $_SESSION['total']=0;
                                    $_SESSION['count']=0;
                                }

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

                                echo $_SESSION['total']/$_SESSION['count'];
                                session_unset();
                                session_destroy();
                            }
                        }
                    }
                }

                else {
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