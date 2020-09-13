function num(number) {

    let n1 = number;

    console.log(n1);
    let n2 = document.dados.resultado.value;
    let resultado = n2 + n1;
    document.dados.resultado.value = resultado;


}

function calcula() {

    console.log(document.dados.resultado.value);
    var valor = Array.from(document.dados.resultado.value);
    console.log(valor);
    console.log(valor.length);
    var valor2 = valor;
    console.log("VALOR tostring " + valor2.toString());
    //Retirar as virgulas




    valor2 = valor2.join('')
    valor2 = eval(valor2);

    console.log("VALOR EVAL " + valor2);

    document.dados.resultado.value = valor2;

    /*for (let i = 0; i < valor.length; i++) {
        if (valor[i] == '+') {
            var j = valor.indexOf("+");
            var primeiro = valor.slice(0, j);
            var segundo = valor.slice(j + 1, valor.length);


            let resp = parseInt(primeiro.join('')) + parseInt(segundo.join(''));
            console.log(resp);
            console.log(segundo);

            document.dados.resultado.value = resp;
        }
        if (valor[i] == '-') {
            var j = valor.indexOf("-");
            var primeiro = valor.slice(0, j);
            var segundo = valor.slice(j + 1, valor.length);


            let resp = parseInt(primeiro.join('')) - parseInt(segundo.join(''));
            console.log(resp);
            console.log(segundo);

            document.dados.resultado.value = resp;
        }
        if (valor[i] == 'x') {
            var j = valor.indexOf("x");
            var primeiro = valor.slice(0, j);
            var segundo = valor.slice(j + 1, valor.length);


            let resp = parseInt(primeiro.join('')) * parseInt(segundo.join(''));
            console.log(resp);
            console.log(segundo);

            document.dados.resultado.value = resp;
        }
        if (valor[i] == '/') {
            var j = valor.indexOf("/");
            var primeiro = valor.slice(0, j);
            var segundo = valor.slice(j + 1, valor.length);


            let resp = parseInt(primeiro.join('')) / parseInt(segundo.join(''));
            console.log(resp);
            console.log(segundo);

            document.dados.resultado.value = resp;
        }
    }*/

}

function resetar() {
    document.dados.resultado.value = '';
}








function num8() {

    let n1 = 8;

    console.log(n1);
    let n2 = document.dados.resultado.value;
    let resultado = n2 + n1;
    document.dados.resultado.value = resultado;


}

function num9() {

    let n1 = 9;

    console.log(n1);
    let n2 = document.dados.resultado.value;
    let resultado = n2 + n1;
    document.dados.resultado.value = resultado;


}

function num4() {

    let n1 = 4;

    console.log(n1);
    let n2 = document.dados.resultado.value;
    let resultado = n2 + n1;
    document.dados.resultado.value = resultado;


}

function num5() {

    let n1 = 5;

    console.log(n1);
    let n2 = document.dados.resultado.value;
    let resultado = n2 + n1;
    document.dados.resultado.value = resultado;


}

function num6() {

    let n1 = 6;

    console.log(n1);
    let n2 = document.dados.resultado.value;
    let resultado = n2 + n1;
    document.dados.resultado.value = resultado;


}

function num1() {

    let n1 = 1;

    console.log(n1);
    let n2 = document.dados.resultado.value;
    let resultado = n2 + n1;
    document.dados.resultado.value = resultado;


}

function num2() {

    let n1 = 2;

    console.log(n1);
    let n2 = document.dados.resultado.value;
    let resultado = n2 + n1;
    document.dados.resultado.value = resultado;


}

function num3() {

    let n1 = 3;

    console.log(n1);
    let n2 = document.dados.resultado.value;
    let resultado = n2 + n1;
    document.dados.resultado.value = resultado;


}

function num0() {

    let n1 = 0;

    console.log(n1);
    let n2 = document.dados.resultado.value;
    let resultado = n2 + n1;
    document.dados.resultado.value = resultado;


}