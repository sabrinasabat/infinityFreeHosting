/*Crea un programa que pida al usuario su nombre y apellidos y muestre:
*
* El tamaño del nombre más los apellidos (sin contar espacios). ok
*
* La cadena en minúsculas y en maiúsculas. ok
*
* Que divida el nombre y los apellidos y los muestre en 3 líneas, donde
* ponga Nombre: /Apellido 1: / Apellido 2: ok
*
* Una propuesta de nombre de usuario, compuesto por la inicial del nombre, el primer apellido y
* la inicial del segundo apellido. Ej: Para Xavier Sastre Flexas seria xsastref. ok
*
* Una propuesta de nombre de usuario compuesto por las tres primeras letras del nombre y de los apellidos. ok
* Ej: xavsasfle*/

function nombreApellidos(){

    var nombre = window.prompt("Digite su nombre y sus apellidos:");
    var noSpace= nombre.replace(/ /g, ""); //si uso " ", pilla solamente el primer espacio
    var tamano = noSpace.length;
    var maiuscula = nombre.toUpperCase();
    var minuscula = nombre.toLowerCase();
    var arr = nombre.split(" ");

    var propnombre = arr[0].charAt(0)+arr[1]+arr[2].charAt(0);

    var propnombre2 = arr[0].slice(0,3) + arr[1].slice(0,3)+arr[2].slice(0,3);

    window.alert("Tamaño del nombre más los apellidos: \n"+tamano)
    window.alert("Minuscula: "+minuscula);
    window.alert("Maiuscula: "+maiuscula);
    window.alert("NOMBRE: "+arr[0]+"\nAPELLIDO 1: "+arr[1]+"\nAPELLIDO 2: "+arr[2]);
    window.alert("Propuesta de nombre: "+propnombre);
    window.alert("Otra propuesta de nombre: "+propnombre2);
}
