/* Necesitamos almacenar en un programa todos los discos de música que tenemos en casa.
Con objetos. Crea un objeto disco que almacene la siguiente información:
- Nombre del disco
- Grupo de música o cantante
- Año de publicación
- Tipo de música (Rock, pop, punk o indie)
- Localización: almacenará un número de estantería
- Prestado: almacenará un valor booleano. Por defecto será false.

Además tendrá los siguientes métodos:
- Un constructor sin parámetros (las 4 primeras propiedades serán cadenas vacías, la localización será 0 por defecto y
prestado estará a false).
- Un método que permita incluir las cinco primeras propiedades; la propiedad prestado seguirá a false.
- Un método que permita incluir las cinco primeras propiedades; la propiedad prestado seguirá a false.
- Un método que permitirá cambiar el número de estantería en la localización.
- Un método que permitirá cambiar la propiedad Prestado.
- Un método que muestre toda la información de un disco.

Guarda todo el código en un archivo llamado disco.js */

function Disco(){
    this.nombreDisco = "";
    this.grupoOcantante = "";
    this.anoPublicacion = "";
    this.tipoMusica = "";
    this.localizacion = 0;
    this.prestado = false;
}

Disco.prototype.cambiarPropiedades = function(nombre, grupo, anoPubl, tipoMus, local){
    this.nombreDisco = nombre;
    this.grupoOcantante = grupo;
    this.anoPublicacion = anoPubl;
    this.tipoMusica = tipoMus;
    this.localizacion = local;
}

Disco.prototype.nuevaLocalizacion = function(nuevaLocalizacion){
    this.localizacion = nuevaLocalizacion;
}

Disco.prototype.estadoPrestado = function(estadoPrestado){
    this.prestado = estadoPrestado;
}

Disco.prototype.todaInformacion = function(){
    return "<b>Nombre del disco: </b>" + this.nombreDisco + "<b><br>\nGrupo o Cantante: </b>" + this.grupoOcantante + "<b><br>\nAño de Publicación:</b> " + this.anoPublicacion + "<b><br>\nTipo de Música: </b>" + this.tipoMusica + "<b><br>\nEl disco está guardado en:</b> " + this.localizacion + "<b><br>\nEste disco está prestado?:</b> " + this.prestado + "<br><br>";
}
// -------------------------------------------------------------------------------------------------------
const nuevoDisco = new Disco();
nuevoDisco.cambiarPropiedades("Pink Floyd The Wall", "Pink Floyd", "1900", "Rock", 2);
nuevoDisco.estadoPrestado(true);
nuevoDisco.nuevaLocalizacion(3);
// -------------------------------------------------------------------------------------------------------
const nuevoDisco2 = new Disco();
nuevoDisco2.cambiarPropiedades("Roah", "Katy Perry", 2006, "Pop", 9);
nuevoDisco2.estadoPrestado(false);
// -------------------------------------------------------------------------------------------------------

console.log(nuevoDisco.todaInformacion());

arrayDiscos = [];
arrayDiscos.push(nuevoDisco, nuevoDisco2);

console.log(arrayDiscos);
// -------------------------------------------------------------------------------------------------------
// Empiezando con las funciones
// -------------------------------------------------------------------------------------------------------
function cantidadDiscos(){
    document.write("Tenemos el total de: " + arrayDiscos.length + " discos.");
}

function listadoDiscos(){
    //puedo hacer un switch
    document.write("<h2>Listado de discos: </h2><br>");
    for(var i=0; i<arrayDiscos.length; i++){
        document.write(arrayDiscos[i].todaInformacion() + "<br>");
    }
}