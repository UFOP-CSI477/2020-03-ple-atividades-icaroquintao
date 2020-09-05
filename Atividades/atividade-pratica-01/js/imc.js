function calcula() {
    var ps, at, resp, retorno, aux, pesoideal, pesoideal2;


    ps = document.getElementById("peso").value;
    at = document.getElementById("altura").value;


    aux = ps / (at * at);
    console.log(aux);
    resp = parseFloat(aux.toFixed(1));
    console.log(resp);
    if (resp < 18.5) {
        retorno = 'Subnutrição';
        pesoideal = 18.5 * (at * at);
        pesoideal2 = 24.9 * (at * at)
        pesoideal = parseFloat(pesoideal.toFixed(2));
        pesoideal2 = parseFloat(pesoideal2.toFixed(2));
        document.getElementById("resposta2").innerHTML = retorno;
        document.getElementById("resposta").innerHTML = resp;
        document.getElementById("pesoid").innerHTML = pesoideal + ' KG';
        document.getElementById("pesoid2").innerHTML = pesoideal2 + ' KG';

    }
    if (resp >= 18.5 && resp <= 24.9) {
        retorno = 'Peso Saudável';
        pesoideal = 'Parabéns! Você está no peso ideal';
        document.getElementById("resposta2").innerHTML = retorno;
        document.getElementById("resposta").innerHTML = resp;
        document.getElementById("pesoid").innerHTML = pesoideal;
    }
    if (resp >= 25 && resp <= 29.9) {
        retorno = 'Sobrepeso';
        pesoideal = 18.5 * (at * at);
        pesoideal2 = 24.9 * (at * at)
        pesoideal = parseFloat(pesoideal.toFixed(2));
        pesoideal2 = parseFloat(pesoideal2.toFixed(2));
        document.getElementById("resposta2").innerHTML = retorno;
        document.getElementById("resposta").innerHTML = resp;
        document.getElementById("pesoid").innerHTML = pesoideal + ' KG';
        document.getElementById("pesoid2").innerHTML = pesoideal2 + ' KG';
    }
    if (resp >= 30 && resp <= 34.9) {
        retorno = 'Obesidade grau 1';
        pesoideal = 18.5 * (at * at);
        pesoideal2 = 24.9 * (at * at)
        pesoideal = parseFloat(pesoideal.toFixed(2));
        pesoideal2 = parseFloat(pesoideal2.toFixed(2));
        document.getElementById("resposta2").innerHTML = retorno;
        document.getElementById("resposta").innerHTML = resp;
        document.getElementById("pesoid").innerHTML = pesoideal + ' KG';
        document.getElementById("pesoid2").innerHTML = pesoideal2 + ' KG';
    }
    if (resp >= 35 && resp <= 39.9) {
        retorno = 'Obesidade grau 2';
        pesoideal = 18.5 * (at * at);
        pesoideal2 = 24.9 * (at * at)
        pesoideal = parseFloat(pesoideal.toFixed(2));
        pesoideal2 = parseFloat(pesoideal2.toFixed(2));
        document.getElementById("resposta2").innerHTML = retorno;
        document.getElementById("resposta").innerHTML = resp;
        document.getElementById("pesoid").innerHTML = pesoideal + ' KG';
        document.getElementById("pesoid2").innerHTML = pesoideal2 + ' KG';
    }
    if (resp > 40) {
        retorno = 'Obesidade grau 3';
        pesoideal = 18.5 * (at * at);
        pesoideal2 = 24.9 * (at * at)
        pesoideal = parseFloat(pesoideal.toFixed(2));
        pesoideal2 = parseFloat(pesoideal2.toFixed(2));
        document.getElementById("resposta2").innerHTML = retorno;
        document.getElementById("resposta").innerHTML = resp;
        document.getElementById("pesoid").innerHTML = pesoideal + ' KG';
        document.getElementById("pesoid2").innerHTML = pesoideal2 + ' KG';
    }


}