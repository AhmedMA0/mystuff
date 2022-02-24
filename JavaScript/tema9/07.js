var promesa=new Promise((resolver, rechazar)=>{
    let n1=3; let n2=2;
    if(n1==n2) resolver ("¡Son iguales!");
    else rechazar (Error("Algo raro ha pasado"));
});

promesa.then((respuesta)=>{
    console.log(respuesta);
}).catch((error)=>{
    console.log(error.message);
});



var promesa = new Promise((resolver, rechazar)=>{
    let n1=3; let n2=2;
    if(n1==n2) resolver ("¡Son iguales!");
    else rechazar (Error("Algo raro ha pasado"));
    });
    promesa.then((respuesta)=>{
        console.log("Me ha ido bien");
        console.log(error.message);
    }).catch((error)=>{
        console.log("Me ha ido mal");
        console.log(error.message);

    });