// Crea un programa que pida por parámetro tu cumpleaños (no hace falta el año) y saque todos los años
// en que tu cumpleaños va a caer en domingo desde este año hasta eñ año 2100.

function cumpleDomingos(){
    var $fechaCumple = window.prompt("Digite el día y més de su cumpleaños. FORMATO[DD-MM]")
    var $partesfecha = $fechaCumple.split("-");

    var dia = parseInt($partesfecha[0]);
    var mes = parseInt($partesfecha[1])-1;

    var anoActual = new Date().getFullYear();
    var domingos=0;

    for(var cont = anoActual; cont<=2100; cont++){
        var fecha= new Date(cont, mes, dia);
        if(fecha.getDay() ===0){
            domingos++;
        }
    }
    window.alert(domingos);
}