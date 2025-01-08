/*
Elabora un script que pida al usuario una cadena de texto (párrafo) con al menos 10 palabras.
La cadena solo puede contener letras y/o los siguientes puntos de puntuación:
Punto «.»
Coma «,»
Punto y coma «;»
Dos puntos «:»
Comillas: simples «’» y dobles «»»
Signos de interrogación «¿» y «?»
Signos de exclamación «¡» y «!»
Puntos suspensivos «…»
Guion «-»
Se deben lanzar excepciones para controlar los errores producidos en el proceso de validación a la hora de introducir la cadena de texto,
mostrando un mensaje diferente en función del fallo producido.Controlar los siguientes casos:
– Si el usuario introduce una cadena vacía.
– Si se introduce una cadena que no cumpla con los caracteres especificados.
– Si el usuario no introduce al menos 10 palabras (los signos de puntuación no se consideran palabras)
Cuando se haya introducido la cadena de texto de forma correcta, se le indicará al usuario el número de palabras que tiene el párrafo,
así como un recuento total del número total de letras (solo letras),
el número de letras ‘a’, el número de letras ‘e’, el número de letras ‘i’, el número de letras ‘o’ y el número de letras ‘u’.
Finalmente se mostrará qué vocal (o vocales) aparece más veces repetidas en la cadena,
y el porcentaje de aparición teniendo en cuenta la frecuencia con la que se repite en el párrafo,
considerando para este cálculo solo las letras de la misma (es decir que, si la cadena tiene una longitud de 6,
pero solo 4 letras y la vocal «a» aparece 2 veces, entonces el porcentaje de aparición de la vocal «a» es de un 50%).
Hacer lo mismo para la vocal (o vocales) que menos aparece. Si una vocal no aparece en toda la cadena, no se considera en este cómputo.
Crea una función que se denomine «principal2» y que se invoque cuando se pulse el botón «Ejercicio2».

 */

function principal2(){
    let texto = prompt("Introduzca un texto con al menos 10 palabras");
    let palabras = texto.split(" ");
    let letras = texto.replace(/[^a-zA-Z]/g, "");
    let a = texto.match(/a/gi);
    let e = texto.match(/e/gi);
    let i = texto.match(/i/gi);
    let o = texto.match(/o/gi);
    let u = texto.match(/u/gi);
    var vocalRepetida = "";
    let porcentajeA = a.length/letras.length*100;
    let porcentajeE = e.length/letras.length*100;
    let porcentajeI = i.length/letras.length*100;
    let porcentajeO = o.length/letras.length*100;
    let porcentajeU = u.length/letras.length*100;


    if(texto === ""){
        alert("No has introducido nada");
        return;
    }

    if(texto.split(" ").length < 10){
        alert("El texto tiene que tener AL MENOS 10 palabras");
        return;
    }

    if (!texto.match(/^[a-zA-Z0-9.,;:'\"¿?¡!\s-]+(\.\.\.)?$/)) {
        alert("El texto introducido no es válido");
        return;
    }

    if(a.length>e.length && a.length>i.length && a.length>o.length && a.length>u.length){
        vocalRepetida = "A";
    } else if(e.length>a.length && e.length>i.length && e.length>o.length && e.length>u.length){
        vocalRepetida = "E";
    } else if(i.length>a.length && i.length>e.length && i.length>o.length && i.length>u.length){
        vocalRepetida = "I";
    } else if(o.length>a.length && o.length>e.length && o.length>i.length && o.length>u.length){
        vocalRepetida = "O";
    } else{
        vocalRepetida = "U";
    }



    alert(`Cantidad de palabras: ${palabras.length}\n`+
    `Cantidad de letras: ${letras.length}\n`+
    `Cantidad de letras A: ${a.length}\n`+
    `Cantidad de letras E: ${e.length}\n`+
    `Cantidad de letras I: ${i.length}\n`+
    `Cantidad de letras O: ${o.length}\n`+
    `Cantidad de letras U: ${u.length}\n`+
    `La vocal que más se repite es: ${vocalRepetida}\n`+
    `Porcentaje de aparición de la vocal A: ${Math.round(porcentajeA)}%\n`+
    `Porcentaje de aparición de la vocal E: ${Math.round(porcentajeE)}%\n`+
    `Porcentaje de aparición de la vocal I: ${Math.round(porcentajeI)}%\n`+
    `Porcentaje de aparición de la vocal O: ${Math.round(porcentajeO)}%\n`+
    `Porcentaje de aparición de la vocal U: ${Math.round(porcentajeU)}%\n`);



}


























