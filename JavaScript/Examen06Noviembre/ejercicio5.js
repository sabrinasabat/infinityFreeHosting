/*Crea una función que reciba una cadena de texto y devuelva un objeto con el recuento de cada carácter.*/
function recuentoCaracter(){
    var texto = "Sabrina Sabat dos Santos";
    texto=texto.toLowerCase();
    var recuento = {};
    for (var i = 0; i < texto.length; i++){
        if (recuento[texto[i]] === undefined){
            recuento[texto[i]]=1;
        } else {
            recuento[texto[i]]++;
        }
    }
    console.log(recuento);
}
recuentoCaracter();