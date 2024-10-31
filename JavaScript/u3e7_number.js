/*Cre un programa que pida al usuario un número entero por pantalla
y muestre:
    - Su valor exponencial.
    - El número de 4 decimales.
    - El número en binario
    - El número en octal
    - El número en hexadecimal
   Utiliza para ello los métodos del objeto Number.

   - Como datos de muestra, si metes 50, deberías obtener: 5e1 / 50.0000 / 00110010 / 62 / 0x32.
 */

function number(){
    var num = window.prompt("Digite un número entero: ");
    num = Number(num);

    var valorExponencial = num.toExponential();
    var decimales4 = num.toFixed(4);
    var binario = num.toString(2).padStart(8, '0');
    var octal = num.toString(8);
    var hexadecimal = num.toString(16);

    window.alert("Número en valor exponencial: "+valorExponencial);
    window.alert("Número con 4 decimales: "+decimales4);
    window.alert("Número en binario: "+binario);
    window.alert("Número en octal: "+octal);
    window.alert("Número en hexadecimal: 0x"+hexadecimal);
}


