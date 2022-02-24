class ParImpar {
    constructor(num) {

        this.x = num;

        this.error = function () {
            if (isNaN(this.x)) {
                console.error('Dato erroneo');
            }
            else
                console.log('Dato correcto.');
        };

        this.resuelve = function () {
            this.x % 2 ? alert('Impar') : alert('Par');
        };

        this.es = (x) => x % 2 ? 'impar' : 'par';

        this.muestraRandom = function () {

            let rand = 0;
            let cad = '';

            for (let i = 0; i < 10; i++) {
                rand = parseInt(Math.random() * 10000 + 1);
                cad += rand + ' es ' + this.es(rand) + '. ';
            }

            document.writeln(cad);
        };

    }
}

ejemplo = new ParImpar('aaa');
ejemplo.error();

ejemplo = new ParImpar(50);
ejemplo.error();
ejemplo.resuelve();
ejemplo.muestraRandom();

