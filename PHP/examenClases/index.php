<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="#" method="post">
        Nombre: <input type="text" name="name">
        Apellidos: <input type="text" name="surs">
        Direccion: <input type="text" name="dir">
        DNI: <input type="text" name="dni">
        Puesto <input type="text" name="puesto">
        Nombre equipo <input type="text" name="nequ">
        Num. Jug. <input type="text" name="nj">

        <input type="submit" value="go">

    </form>
    <?php 
        include_once('persona.php');
        include_once('jugador.php');
        include_once('equipo.php');


        $nombre = $_POST['name'];
        $apellidos = $_POST['surs'];
        $direccion = $_POST['dir'];
        $dni = $_POST['dni'];
        $puesto = $_POST['puesto'];
        $nomEqu = $_POST['nequ'];
        $numJug = $_POST['nj'];

        $persona = new Persona($nombre, $apellidos, $direccion, $dni);

        echo $persona;

        $personaD = ['nombre'=>'Juan', 'apellidos'=>'Juan','direccion'=>'Juan','dni'=>'Juan'];
        
        $persona->leerPersona($personaD);

        $persona->imprimirPersona();

        $jugador = new Jugador($nombre, $apellidos, $direccion, $dni ,$puesto);

        $nc = $nombre. ' '.$apellidos;

        $jugador->leerJugador($nc,$direccion, $dni ,$puesto);

        $jugador->imprimirJugador();

        $equipo = new Equipo($nomEqu, $numJug);

        $equipo->resize(10);

        for ($i=0; $i < 10 ; $i++) { 
            $jugadores[$i] = new Jugador('a','b','c','d','e');
        }

        $equipo->leerEquipo($jugadores);

    ?>
</body>
</html>