var input_valor_moeda_1 = document.getElementById("valor_moeda_1");
var input_valor_moeda_2 = document.getElementById("valor_moeda_2");

var moeda_1 = document.getElementById("moeda_1");
var moeda_2 = document.getElementById("moeda_2");

let valor_moeda_2 = 0;

function converter() {
    

    if(moeda_1.value == "BRL" && moeda_2.value == "USD"){
        valor_moeda_2 = (parseFloat(input_valor_moeda_1.value) / 3.90).toFixed(3);
        document.getElementById("valor_moeda_2").value = valor_moeda_2;
    }

    if(moeda_1.value == "USD" && moeda_2.value == "BRL"){
        valor_moeda_2 = (parseFloat(input_valor_moeda_1.value) * 3.90).toFixed(3);
        input_valor_moeda_2.value = valor_moeda_2;
    }


}