/*Crea un programa que muestre la hora actual en diferentes formatos,
* según el valor que meta el usuario por parámetro:
*
* 1) 14:35:07 (hora detallada con minutos y segundos)
* 2)02:35 PM o 02:35 AM (hora con minutos) y AM o PM según
* sea antes o después del medio dia).
* */


function formatoHoras(){

    var horaActual = new Date();
    var $fechaPropuesta = window.prompt("Elija el formato de la fecha [1 o 2]:");

    switch ($fechaPropuesta) {
        case "1":
            window.alert(horaActual.toLocaleTimeString("es-ES"));
            break;
        case "2":
            window.alert(horaActual.toLocaleTimeString("en-US"));
            break;
        default:
            window.alert("Opción no valida.")
    }















}