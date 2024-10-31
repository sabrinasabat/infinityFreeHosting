 /*Crea un programa que muestre la fecha actual en diferentes formatos,
 según el valor que meta el usuario por parametro:

 1- 17/02/2016
 2- Miércoles, 17 de febrero de 2016
 3- Wednesday, February 17, 2016
*/

function formatoFecha(){
    var $fecha = new Date();
    var $fecha1 = $fecha.toLocaleDateString();
    var $fecha2 = $fecha.toLocaleDateString("es-ES", {weekday:"long", day: "2-digit", month:"long", year:"numeric"});
    var $fecha3 = $fecha.toLocaleDateString("en-US", {weekday: "long", month:"long", day: "2-digit", year: "numeric"});

    var $fechaPropuesta = window.prompt("Elija el formato de la fecha [1, 2 o 3]:");

    switch ($fechaPropuesta) {
        case "1":
            window.alert($fecha1)
            break;
        case "2":
            window.alert($fecha2)
            break;
        case "3":
            window.alert($fecha3)
            break;
        default:
            window.alert("Opción no valida.")
    }
}