function calcula() {

    var corredores = [document.getElementById("nome1").value, document.getElementById("nome2").value, document.getElementById("nome3").value, document.getElementById("nome4").value, document.getElementById("nome5").value, document.getElementById("nome6").value]

    var ctempo = [document.getElementById("tempo1").value, document.getElementById("tempo2").value, document.getElementById("tempo3").value, document.getElementById("tempo4").value, document.getElementById("tempo5").value, document.getElementById("tempo6").value]

    var aux = [document.getElementById("tempo1").value, document.getElementById("tempo2").value, document.getElementById("tempo3").value, document.getElementById("tempo4").value, document.getElementById("tempo5").value, document.getElementById("tempo6").value];
    var aux2 = corredores;
    var flag = 0;
    //Filtrar campos vazios
    aux = aux.filter(function(v) { return v !== '' });
    aux2 = aux2.filter(function(v) { return v !== '' });
    ctempo = ctempo.filter(function(v) { return v !== '' });
    corredores = corredores.filter(function(v) { return v !== '' });
    // Mostra tabela resultado e exibe erro caso não tenha pelo menos um competidor
    console.log(aux);
    if (ctempo.length != 0 && corredores.length != 0) {
        document.getElementById("resultado").style.display = "block";
        document.getElementById("alerta").classList.remove("table-danger");
        document.getElementById("alerta1").style.display = "none";
        document.getElementById("alerta2").style.display = "none";
    }

    if (ctempo.length == 0 || corredores.length == 0) {
        document.getElementById("alerta").classList.add("table-danger");
        document.getElementById("alerta1").style.display = "block";
        document.getElementById("alerta2").style.display = "block";
    }

    //numero de vencedores para exibir na tela
    var min = Math.min.apply(null, ctempo);;
    var count = ctempo.filter(x => x == min).length;
    for (let n = 0; n < count; n++) {
        document.getElementById("mostra" + n).style.display = "block";
    }
    console.log(ctempo.length);

    while (flag <= ctempo.length - 1) {
        for (var i = 0; i < aux.length; i++) {
            var x = Math.min.apply(null, aux); //Menor valor do array Auxiliar (tempo)

            if (x == aux[i]) {
                var y = aux[i]; // Tempo do competidor
                var z = aux2[i]; // Nome do competidor
                document.getElementById("resp" + flag).innerHTML = z;
                document.getElementById("tresp" + flag).innerHTML = y;
                var j = ctempo.indexOf("" + x); // Procura onde o valor estava no array do tempop
                ctempo[j] = 9999999999; // Descartando o valor, para se caso existam valores repetidos ele pegue o proximo


                document.getElementById("lresp" + flag).innerHTML = j + 1; //Posição de largada

                if (count != 0) {
                    document.getElementById("presp" + flag).innerHTML = 1; // Quantos primeiros lugares tem
                    count = count - 1;
                } else {
                    document.getElementById("presp" + flag).innerHTML = flag + 1; // Classificação sem repetição de numeros
                }
                aux.splice(i, 1); //Remove o tempo no aux
                aux2.splice(i, 1); //Remove o nome no aux2
                flag = flag + 1;

            }



        }


    }
}

function limpa() {
    document.getElementById("resultado").style.display = "none";
}