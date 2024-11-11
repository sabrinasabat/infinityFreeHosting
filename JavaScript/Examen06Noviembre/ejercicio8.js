/*Crea una función que reciba una cadena de texto y devuelva la misma cadena con las vocales eliminadas.*/

function sinVocales(){
    var texto = "ejemplo de otro texto a";
    var sinvocalesA = texto.replace(/a/g, "");
    var sinvocalesE = sinvocalesA.replace(/e/g, "");
    var sinvocalesI = sinvocalesE.replace(/i/g, "");
    var sinvocalesO = sinvocalesI.replace(/o/g, "");
    var sinvocalesU = sinvocalesO.replace(/u/g, "");
    console.log(sinvocalesU);
}
sinVocales();
