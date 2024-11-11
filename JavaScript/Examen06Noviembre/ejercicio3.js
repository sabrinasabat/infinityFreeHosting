//Utilizando el objeto Date, crea una función que reciba una fecha y devuelva el número de días hasta final de año.

function finAno() {
    var fecha = new Date();
    var finAno = new Date(2024, 11, 31);
    var diferencia = finAno-fecha;
    var diasRestantes = Math.ceil(diferencia / (1000 * 60 * 60 * 24));
    console.log("faltan: "+ diasRestantes+ " días para el fin del año :) ")
}
finAno();
