function calcula() {
    var a, t, m, efeitos;


    a = document.getElementById("amplitude").value;
    t = document.getElementById("tempo").value;
    if (!a || !t) {
        document.getElementById("mostrar").style.display = "none";
    } else {
        m = Math.log10(a) + (3 * Math.log10(8 * t)) - 2.92;
        m = parseFloat(m.toFixed(2));
        if (m < 3.5) {
            efeitos = 'Geralmente não sentido, mas gravado.';
            document.getElementById("resposta").innerHTML = m;
            document.getElementById("mostrar").style.display = "block";

            document.getElementById("resposta2").innerHTML = efeitos;

        }
        if (m >= 3.5 && m <= 5.4) {
            efeitos = 'Às vezes sentido, mas raramente causa danos.';
            document.getElementById("resposta").innerHTML = m;
            document.getElementById("mostrar").style.display = "block";

            document.getElementById("resposta2").innerHTML = efeitos;

        }
        if (m >= 5.5 && m <= 6) {
            efeitos = 'No máximo causa pequenos danos a prédios bem construídos, mas pode danificar seriamente casas mal construídas em regiões próximas.';
            document.getElementById("resposta").innerHTML = m;
            document.getElementById("mostrar").style.display = "block";

            document.getElementById("resposta2").innerHTML = efeitos;

        }
        if (m >= 6.1 && m <= 6.9) {
            efeitos = 'Pode ser destrutivo em áreas em torno de até 100km do epicentro.';
            document.getElementById("resposta").innerHTML = m;
            document.getElementById("mostrar").style.display = "block";

            document.getElementById("resposta2").innerHTML = efeitos;

        }
        if (m >= 7 && m <= 7.9) {
            efeitos = 'Grande terremoto. Pode causar sérios danos numa grande faixa.';
            document.getElementById("resposta").innerHTML = m;
            document.getElementById("mostrar").style.display = "block";

            document.getElementById("resposta2").innerHTML = efeitos;

        }
        if (m >= 8) {
            efeitos = 'Enorme terremoto. Pode causar graves danos em muitas áreas mesmo que estejam a centenas de quilômetros';
            document.getElementById("resposta").innerHTML = m;
            document.getElementById("mostrar").style.display = "block";

            document.getElementById("resposta2").innerHTML = efeitos;

        }


    }

}

function limpar() {

    document.getElementById("mostrar").style.display = "none";
}