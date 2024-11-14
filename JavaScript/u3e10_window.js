/* Crea un programa que tenga botones para permitir modificar las siguientes propiedades de una ventana:
  - Abrir una ventana nueva:
        Debes preguntar al usuario si esta de acuerdo o no, y solo si acepta se abrirá la nueva ventana.
        La nueva ventana tendrá las siguientes propiedades: no tendrá barra de herramientas, ni location,
        ni barra de menú, ni será redimensionable. Tendrá 200x80 pixeles y se posicionará en 500x500 pixeles.
        La nueva ventana incluirá un pequeño texto y un botón que al hacer clic cerrará la ventana.

  - Cerrar la ventana creada: si la ventana está cerrada mostrará un mensaje de error.
  - Mover la ventana 10 pixeles a la derecha y abajo.
  - Mover la ventana a la posicion 100,100.
  - Aumentar el tamaño de la ventana de 10 píxeles de ancho y largo.
  - Aumentar el tamaño de la ventana a 400x200.
  - Colocar el scroll de la ventana arriba delESPACIOtodo
  - Colocar el scroll de la ventana a 10 pixeles de la parte superior

Todos los botones, excepto el primero y el segundo, los puedes programar directamente mediante la propiedad onClick,
por ejemplo:
    <input type="button" value="imprimir" onClick="print()"/>

Recuerda que no es necesario utilizar "window" delante de la propiedad.
*/
let navegador;
function ventana() {

    var positivo = window.confirm("¿Estás de acuerdo en abrir una nueva ventana?");
    if(positivo){
        var nombreVentana = "JavaScript";
        let especificacionesVentana = `toolbar=no, location=no, menubar=no, resizable=no, width=200, height=80, left=500, top=500`;
        var navegador = window.open("http://localhost:63342/JavaScript/infinityFreeHosting/JavaScript/u3e10_NuevaVentana.html?_ijt=r2g21e10c0cpqtii2pdf2qsg7u&_ij_reload=RELOAD_ON_SAVE", nombreVentana, especificacionesVentana);

    } else{
        window.alert("Nuestro programa acaba aquí.")
    }
}

function cerrarVentana() {
    window.close(navegador);
}