<?php
    if (!isset($_SESSION['on'])) {
        session_start();
        $_SESSION['on']=true;
    }

    session_unset();
    session_destroy();

    header('Location: formSesion.php');
