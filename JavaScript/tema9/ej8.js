let promesa1 = Promise.resolve("Estoy resuelta");

let promesa2 = new Promise((resolver) => {
    setTimeout(() => {
        resolver("Resuelvo en 3s")
    }, 3000);
});

let promesa3 = new Promise((resolver) => {
    setTimeout(() => {
        resolver("Resuelvo en 6s")
    }, 6000);
});

let promesaConjunta = Promise.all([promesa1, promesa2, promesa3]);

console.log("Empezando");

promesaConjunta.then((resultados) => {
    console.log (resultados);
});