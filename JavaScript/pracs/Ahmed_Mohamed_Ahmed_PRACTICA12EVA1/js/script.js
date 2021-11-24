//declaramos la variable acierto como false para que se pueda empezar a ejecutar la logica
var para=false;

//para comienza siendo falso, para luego pedirle un dni al usuario y poner la variable a true en caso de que se cumpla alguna condicion
//si no se cumple sigue siendo false por lo que se vuelve a ejecutar el bucle hasta que lo sea
while (para==false) {
    var n=prompt('Introduce un DNI válido');

    if (n==null) {
        alert('Ejecución abortada');
        para=true;
    }
    
    else if(n.length== 0){
        alert("Cadena vacia");
    }

    else if (n==0) {
        alert('0 introducido. Ejecución abortada');
        para=true;
    }
    
    //uso de una expresion regular para validar el dni
    else if ((n.match(/^(\d{8})([TRWAGMYFPDXBNJZSQVHLCKE])$/))) {
        alert('DNI valido');
        para=true;
    }
}