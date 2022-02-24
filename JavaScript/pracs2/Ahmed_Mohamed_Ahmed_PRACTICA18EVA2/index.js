//funcion que recibe un tiempo y crea una promesa devuelve dependiendo de ese tiempo
function temporizador(tiempo){

    //creamos la promesa con una funcion callback la cual crea un temporizador que al acabar
    //resuelve la promesa positivamente
    //ademas añadimos un eventlistener que detecta cuando se pulsa un boton que cancela el temporizador resolviendo negativamente la promesa
    new Promise((resolve, reject)=>{
        setTimeout(function(){resolve("Tiempo concluido");}, tiempo);

        document.getElementById('but').addEventListener('click', function(){reject('Acción interrumpida por el usuario')});
    }).then((respuesta)=>{//then y catch para sacar los resultados segun toque
        document.getElementById('out').innerHTML=respuesta;
    }).catch((canceled)=>{
        document.getElementById('out').innerHTML=canceled;
    });
}

//indicamos que lo que se exporta por defecto es la funcion
export default temporizador
