function calcula() {

    var corredores = [document.getElementById("nome1").value, document.getElementById("nome2").value, document.getElementById("nome3").value, document.getElementById("nome4").value, document.getElementById("nome5").value, document.getElementById("nome6").value]
    console.log(corredores);
    var ctempo = [document.getElementById("tempo1").value, document.getElementById("tempo2").value, document.getElementById("tempo3").value, document.getElementById("tempo4").value, document.getElementById("tempo5").value, document.getElementById("tempo6").value]
    console.log(ctempo);
    var aux = ctempo;
    var aux2 = corredores;





    for (var i = 0; i < ctempo.length; i++) {

        var x = Math.min(aux);
        if (x == ctempo[i]) {
            var y = ctempo[i];
            var z = aux2[i];

            console.log(y, z)
            aux.splice(i, 1);

        }



    }

}