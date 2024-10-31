/*
* Crea un programa que pida al usuario el valor del radio y muestre por pantalla:
* - El valor del radio. - ok
* - El valor del diámetro - ok
* - El valor del perímetro de la circunferencia - ok
* - El valor del área del círculo - ok
* - El valor del área de la esfera
* - El valor del volumen de la esfera
* - El valor de Pi debes obtenerlo del objeto Math, no introducirlo manualmente.
* - Debes escribir al lado si son cm, o cm2, o cm3
*
* Como datos de muestra, si metes 5, deberías obtener aproximadamente: 5 / 10 / 31,41 / 78,54 / 314,15 / 523,59*/
function circulo(){

    var radio = parseFloat(window.prompt("Digite el valor del radio: "));

    var diametro = radio*2;
    var perimetroCirc = Math.floor(2*Math.PI*radio);
    var areaCirc = Math.floor(Math.PI*Math.pow(radio, 2));
    var areaEsf = Math.floor(4*Math.PI*Math.pow(radio, 2));
    var volumenEsf = Math.floor((4/3)*Math.PI*Math.pow(radio,3));

    window.alert("El valor del radio: "+radio+" cm");
    window.alert("El valor del diametro: "+diametro);
    window.alert("El valor del perimetro de la circunferencia: "+perimetroCirc+" cm");
    window.alert("El valor de la área del círculo: "+areaCirc+" cm");
    window.alert("El área de la esfera: "+areaEsf+" cm");
    window.alert("El valor del volumen de la esfera es: "+volumenEsf+" cm");

    const geometry = new THREE.SphereGeometry( 15, 32, 16 );
    const material = new THREE.MeshBasicMaterial( { color: 0xffff00 } );
    const sphere = new THREE.Mesh( geometry, material ); scene.add( sphere );
}
