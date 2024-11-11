// Implementa una función que calcule la media de valores numéricos en un array utilizando el objeto Math.
// (Opcional: (+1) haz lo mismo pero sin utilizar el objeto Math y utilizando la función

function media(){
    var array=[5, 7, 2, 9, 50];
    var suma = array.reduce(function(a,b){return a+b});
    var media = suma/array.length;
    console.log(media);
}
media();
