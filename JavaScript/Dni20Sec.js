function soliciteDni() {
        var letrasDni = [];

        do{
            var dni = window.prompt("Digite el número de su DNI. (Para salir digite -1)")
            if (dni!=="-1"){ // si el usuario digita -1 se detiene.
                var num = dni%23;
                var letra = ["TRWAGMYFPDXBNJZSQVHLCKE"];
                for(var i=0; i<num; i++){
                    if(num===letra[i]){
                        letrasDni.push(letra); //poniendo la letra en el array
                    }
                }
            //var letra = dni.charAt(8); //pillando la ultima letra

            }


        } while(dni!=="-1");

        for(var j=0; j<letrasDni.length;j++){
            console.log("Las letras de todos los DNIs digitados son: "+letrasDni[j]);
        }


    /*String.prototype.letraNif=function () {
        var letra= /^(\d{8})([A-HJ-NP-TV-Z])$/.test(this)&&("TRWAGMYFPDXBNJZSQVHLCKE"[(RegExp.$1%23)]===RegExp.$2);
    };
    alert("12341234H".isNif())
    alert("00000000T".isNif())*/

}
