/*Implementa una función que reciba un array de números y devuelva el segundo valor mayor*/

function segundoMayor(){
    var array = [5, 9, 10, 8, 0, 1];
    array.sort();
    var segundoMayor = array[array.length-1];
    console.log(segundoMayor);
}
segundoMayor();