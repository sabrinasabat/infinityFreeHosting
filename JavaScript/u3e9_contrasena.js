/*Crea un programa que pida al usuario una propuesta de contraseña y compruebe si cumple los siguientes
* requisitos.
*
*   Tiene entre 8 y 16 caracteres. ok
*   Tiene una letra mayúscula. ok
*   Tiene una letra minúscula. ok
*   Tiene un número. ok
*   Tiene uno de los siguientes valores: guión alto, guión bajo, arroba,
*   almohadilla, dólar, tanto por ciento o ampersand "&".
*
* Si cumple con todos los requisitos se considera una contraseña segura, de los contrario
* mostrará que es una contraseña no segura. */

function contrasena() {

    contrasena = window.prompt("Digite una contraseña: ");
    var contrasenaSegura = 0;


    if (contrasena.length >= 8 && contrasena.length <= 16) {
        if (/[A-Z]/g.test(contrasena)) {
            if(/[a-z]/g.test(contrasena)) {
                if(/[0-9]/g.test(contrasena)) {
                    if(/[-_@#$%&]/g.test(contrasena)){
                        contrasenaSegura = 1;
                    } else {
                        contrasenaSegura = 2;
                    }
                }
            }
        }
    }

    if (contrasenaSegura === 1) {
        window.alert("¡Su contraseña es segura, muy bien!")
    } else {
        window.alert("Su contraseña NO es segura, tienes que mejorarla.")
    }
}




