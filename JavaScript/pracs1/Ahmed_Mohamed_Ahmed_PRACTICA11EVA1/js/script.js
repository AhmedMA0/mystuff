//generamos un numero aleatorio entre 0 y 100
var x=Math.floor(Math.random() * 101);
alert(x);

//declaramos la variable acierto como false para que se pueda empezar a ejecutar la logica y el numero de intentos a 0
var acierto=false;
var ints=0;

//mientras que acierto siga siendo falso se sigue ejecutando nuestra logica
while (acierto==false) {
    
    //con la misma logica de antes declaramos que el numero no es valido para empezar a comprobar si lo es o no
    var valid=false;
    
    //valid comienza siendo falso, para luego pedirle un numero un numero al usuario y poner la variable a true en caso de que sea valido
    //si no es valido sigue siendo false por lo que se vuelve a ejecutar el bucle hasta que lo sea
    while (valid==false) {
        var n=prompt('Adivina el numero entre 0 y 100');

        if (!isNaN(n)&&n>0&&n<=100) {
            valid=true;
        }
    }
    
    //una vez que el numero es valido se comprueba si el usuario ha acertado
    //si es asi la variable acierto pasa a valer true por lo que se sale del bucle y se acaba el programa
    //acierte o no se suma uno al numero de intentos
    //cabe destacar que el numero de intentos solo aumenta si el usuario ha introducido un numero valido para asi mostrar los intentos reales
    if (n==x) {
        acierto=true;
        
    }
    
    else if(n>x){
        alert('Prueba con un numero menor.')
    }

    else{
        alert('Prueba con un numero mayor.')
    }
    ints++;
}

//se acaba el programa mostrando el numero de intentos y un mensaje
document.write('Enhorabuena. Intentos=' + ints);
