function openOrSenior(data){
    var array=[[], [], [], []];
    for(var i=0; i<data.length; i++){
        for(var j=0; j<data.length; j++){
            if(j[0]>=55 && j+1 >=7){
                array.push("Senior");
            } else{
                array.push("Open");
            }
        }
    } return array;
}
var data =([[45, 12],[55,21],[19, -2],[104, 20]])
openOrSenior(data);