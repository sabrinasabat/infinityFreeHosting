function finCurso() {

    var inicioCurso = new Date();

    var finCurso = new Date(2025, 5, 24);

    var diferencia = finCurso-inicioCurso;

    var diasRestantes = Math.ceil(diferencia / (1000 * 60 * 60 * 24));


    window.alert("faltan: "+ diasRestantes+ " días para el fin de curso :) ")

}