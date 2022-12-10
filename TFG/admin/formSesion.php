<!DOCTYPE html>
<html id="html" lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Restaurant WebPage">
    <meta name="keywords" content="food, sushi">
    <meta name="author" content="Ahmed M.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link href="../estilos/universal.css" rel="stylesheet">
    <link href="../estilos/adminLogin.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playball&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9e4d7c4912.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        require_once('../clases/includesAdmin.php');

        if (!isset($_SESSION['on'])) {
            session_start();
            $_SESSION['on']=true;
        }

        if (isset($_SESSION['admin'])) {
            if ($_SESSION['admin']) { 
                header('Location: index.php');
            }
        }

        if (isset($_GET['no'])) {
            echo '<script>alert("Contraseña incorrecta.")</script>';
        }
    ?>

    <main>
        <div>
            <p>ADMIN LOGIN</p>
            <form method="POST" action="iniSes.php">
			    <input id="pass" type="text" name="pass" placeholder="Contraseña">
                <input type="hidden" value="<?php echo $adminPass;?>" name="adminPass" id="adminPass">
                <input type="submit" value="Iniciar sesión"> 
            </form>
        </div>
    </main>
    <script src="javaScript/varsAdmin.js"></script>
    <script src="javaScript/admin.js"></script>
</body>
</html>