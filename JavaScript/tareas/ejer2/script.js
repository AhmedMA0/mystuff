function Cometa (diametro, temperatura, nombre) {

    this.diametro=diametro;
    this.temperatura=temperatura;
    this.nombre=nombre
}


Cometa.prototype.defSegunDiccionario= 'Definicion';
Cometa.prototype.getRadio= function() {return this.diametro/2};
Cometa.prototype.getTemperaturaFarenheit= function() {return this.temperatura*1.8+32};

