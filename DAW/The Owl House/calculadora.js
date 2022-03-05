function calcularBitParidad(){

    //Entrada datos
    let input = document.getElementById("primerNumeroBinario").value;
    let input_2 = document.getElementById("segundoNumeroBinario").value;
    let array = [];
    let resultado;

    if(input.length == 0 || input_2.length == 0){
        alert("¡Debes introducir un número!");
    }

    for (let i = 0; i < input.length; i++) {
    array[i] = input.charAt(i);
    }

    if(array.length % 2 == 0){
        resultado = 1;
    } else {
        resultado = 0
    }

console.log(array);

    //Salida
    document.getElementById("salida").innerHTML = resultado;
}

function calcularComplementoAUno(){
//Entrada datos
    let input = document.getElementById("primerNumeroBinario").value;
    let array = [];
    let array_2 = [];

    if(input.length == 0){
        alert("¡Debes introducir un número!");
    }

    for (let i = 0; i < input.length; i++) {
        array[i] = input.charAt(i);
    }

    console.log(array);

    for(let i = 0; i < input.length; i++){
        if(array[i] == 1){
            array_2[i] = 0;
        } else {
            array_2[i] = 1;
        }
    }



console.log(array);

console.log(array_2);

//Salida
document.getElementById("salida").innerHTML = array_2;

}

function resultadoAND(){
    let input = document.getElementById("primerNumeroBinario").value;
    let input_2 = document.getElementById("segundoNumeroBinario").value;
    let array_2 = [];
    let array_3 = [];
    let longitud = 0;

    if(input.length == 0 || input_2.length == 0){
        alert("¡Debes introducir un número!");
    }


    if(input.length > input_2.length){
        longitud = input.length - input_2.length;
    }

    let numeroCeros = "";
    for(let i = 0; i < longitud.length; i++){
        numeroCeros += "0";
    }

    array_2.fill(numeroCeros, 0, longitud);
    input_2 = array_2.toString() + input_2;

    for(let i = 0; i < input.length; i++){
        if(input[i] == 1 && input_2[i] == 1){
            array_3[i] = 1;
            } else {
            array_3[i] = 0;
        }
    }

    
    document.getElementById("salida").innerHTML = array_3;


}