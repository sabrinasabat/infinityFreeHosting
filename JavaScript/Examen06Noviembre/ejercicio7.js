/*Escribe una función que reciba una fecha y devuelva si es un año bisiesto o no.*/

function anoBisiesto(){
    var ano = 2000;
    let bisiesto;
    if(ano%4===0 && ano%100!==0 || ano%400===0){
        bisiesto = true;
    } else{
        bisiesto = false;
    }
    console.log(bisiesto);
}
anoBisiesto();