/*Desarrolla un script que pida al usuario una fecha comprendida entre el 01 de enero de 1975 y el 15 de diciembre de 2019,
ambas fechas incluidas.
    Los formatos de fecha admitidos que puede introducir el usuario pueden ser: D/M/YYYY, DD/MM/YYYY, D-M-YYYY, DD-MM-YYYY, D.M.YYYY o DD.MM.YYYY.
    Se deben lanzar excepciones para controlar los errores producidos en el proceso de validación a la hora de introducir la fecha,
    mostrando un mensaje diferente en función del fallo producido. Controlar los siguientes casos:
    – Introducir una fecha en otro formato. Por ejemplo, usando unos separadores distintos a los especificados o introduciendo el año solo con dos cifras.
– Si el usuario introduce una fecha no válida. Por ejemplo, un día 31 en un mes que solo tiene 30 días.
– Si se introduce una fecha que no esté entre las fechas indicadas.
    Cuando el usuario haya indicado una fecha en el formato correcto y sea válida,
    se mostrará en pantalla los días transcurridos desde el 01 de enero de 1975 (la primera fecha válida) y
    los días que quedan para llegar al 15 de diciembre de 2019 (el límite para la última fecha válida).
Finalmente también se mostrará el día de la semana (lunes, martes, etc.) al que corresponde la fecha introducida por el usuario.
    Crea una función que se denomine «principal1» y que se invoque cuando se pulse el botón «Ejercicio1». */

function principal1() {
    let fecha = prompt("Introduzca una fecha en los siguientes formatos: D/M/YYYY, DD/MM/YYYY, D-M-YYYY, DD-MM-YYYY, D.M.YYYY o DD.MM.YYYY");
    let validacionFecha = /^(\d{1,2})[\/\-\.](\d{1,2})[\/\-\.](\d{4})$/;

    // Validando formato
    if (!validacionFecha.test(fecha)) {
        alert("Formato de fecha incorrecto. Introduzca con uno de los formatos permitidos.");
        return;
    }

    // Separando la fecha
    const partesFechas = fecha.match(validacionFecha);
    const dia = parseInt(partesFechas[1]);
    const mes = parseInt(partesFechas[2]);
    const ano = parseInt(partesFechas[3]);

    // Verifico si la fecha es válida
    const fechaValida = new Date(ano, mes - 1, dia);
    if (fechaValida.getFullYear() !== ano || fechaValida.getMonth() + 1 !== mes || fechaValida.getDate() !== dia) {
        alert("La fecha introducida no es valida.");
        return;
    }

    // Rango permitido
    const fechaInicio = new Date(1975, 0, 1); // 01/01/1975
    const fechaFin = new Date(2019, 11, 15); // 15/12/2019
    if (fechaValida < fechaInicio || fechaValida > fechaFin) {
        alert("La fecha tiene que entrar en el rango de 01/01/1975 y 15/12/2019.");
        return;
    }

    // Días transcurridos y los que se quedan
    const diasTranscurridos = Math.floor((fechaValida - fechaInicio) / (1000 * 60 * 60 * 24));
    const diasRestantes = Math.floor((fechaFin - fechaValida) / (1000 * 60 * 60 * 24));
    //1000:hay 1000 milissegundos en 1 segundo.
    // 60: hay 60 segundos en 1 minuto.
    // 60: hay 60 minutos en 1 hora.
    // 24: Hay 24 horas en 1 dia.

    // Día de la semana
    const semana = ["domingo", "lunes", "martes", "miércoles", "jueves", "viernes", "sábado"];
    const diaSemana = semana[fechaValida.getDay()];

    // Resultados
    alert(`Fecha válida: ${fechaValida.toLocaleDateString()}\n` +
        `Días transcurridos desde 01/01/1975: ${diasTranscurridos}\n` +
        `Días restantes hasta el 15/12/2019: ${diasRestantes}\n` +
        `Día de la semana: ${diaSemana}`);
}