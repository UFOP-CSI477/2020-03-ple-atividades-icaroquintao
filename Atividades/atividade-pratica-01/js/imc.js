function calcula() {
    var ps = 0,
        at = 0,
        resp, retorno, aux, pesoideal, pesoideal2;

    //Carrega os valores informados pelo usuario
    ps = document.getElementById("peso").value;
    at = document.getElementById("altura").value;
    console.log(ps);
    console.log(at);

    if (!ps || !at) {
        console.log('ENTROUUUUUU');
        document.getElementById("mostrar").style.display = "none";
    } else {

        //calcula o IMC
        aux = ps / (at * at);
        console.log(aux);
        //Deixa o resultado com uma casa depois da virgula, para apresentar na tela e fazer as comparações de classificação
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
            document.getElementById("mostrar").style.display = "block";

        }
        if (resp >= 18.5 && resp <= 24.9) {
            retorno = 'Peso Saudável';
            pesoideal = 'Parabéns! Você está no peso ideal';
            document.getElementById("resposta2").innerHTML = retorno;
            document.getElementById("resposta").innerHTML = resp;
            document.getElementById("pesoid").innerHTML = pesoideal;
            document.getElementById(mostrar).style.display = "block";
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
            document.getElementById("mostrar").style.display = "block";
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
            document.getElementById("mostrar").style.display = "block";
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
            document.getElementById("mostrar").style.display = "block";
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
            document.getElementById("mostrar").style.display = "block";
        }
    }

}

function limpa() {
    document.getElementById("mostrar").style.display = "none";
}