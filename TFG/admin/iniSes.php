<?php
    require_once('../clases/includesAdmin.php');

    if ($_POST['pass']==$adminPass) {
        if (!isset($_SESSION['on'])) {
            session_start();
            $_SESSION['on']=true;
            $_SESSION['admin']=true;
        }
        header('Location: ../admin/index.php');
    }

    else{
        header('Location: formSesion.php?no=true');
    }
