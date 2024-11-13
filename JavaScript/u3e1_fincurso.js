function finAno() {
    var fecha = new Date();
    var finAno = new Date(2024, 11, 31);
    var diferencia = finAno-fecha;
    var diasRestantes = Math.ceil(diferencia / (1000 * 60 * 60 * 24));
    window.alert("faltan: "+ diasRestantes+ " días para el fin del año :) ")
}
finAno();
