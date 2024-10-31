function estructura_if() {
    var nombre = window.prompt("Digite su nombre: ")
    var edad = window.prompt("Digite su edad: ")

    if(edad <= 12){
        window.alert(nombre+" tiene "+edad+ " años y es un niño")
    } else if (edad >= 13 && edad <=17){
        window.alert(nombre+" tiene "+ edad + " años y es un adolescente")
    } else if (edad >=18 && edad <=64){
        window.alert(nombre + " tiene " + edad + " años y es un trabajador")
    } else{
        window.alert(nombre+ " tiene " + edad + " años y es un jubilado")
    }
}

