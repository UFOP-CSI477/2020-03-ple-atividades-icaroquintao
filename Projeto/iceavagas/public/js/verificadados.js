function verifica() {
    var a = document.getElementById("area").value;
    var t = document.getElementById("tipo").value;
    var titulo = document.getElementById("titulo").value;
    var empresa = document.getElementById("empresa").value;
    var email = document.getElementById("email").value;
    var link = document.getElementById("link").value;
    var local = document.getElementById("local").value;

    //Verifica se algum campo é vazio
    if (a == '' || t == '' || titulo == '' || empresa == '' || email == '' || link == '' || local == '') {
        console.log('CHEGOU AQ');
        document.getElementById("mostrar").style.display = "block";
        return false;
    }

    // Fonte: https://pt.stackoverflow.com/questions/291974/valida%C3%A7%C3%A3o-campo-e-mails
    //Valida Email
    if (!validarEmail(email)) {
        document.getElementById("mostrar2").style.display = "block";
        return false;
    }
    if (/[0-9]/gm.test(local) || /[!@#$%*()_+^&{}}:;?.]/gm.test(local)) {
        console.log('invalido');
        document.getElementById("mostrar3").style.display = "block";
        return false;
    }
    //Fonte: https://pt.stackoverflow.com/questions/317833/como-verificar-se-a-url-%C3%A9-verdadeira
    //Valida o Link
    var re = new RegExp("^((http(s?):\/\/(www.)?[a-z]+.com\/)|(magnet:\?xt=urn:btih:))")
    if (!re.test(link)) {
        document.getElementById("mostrar4").style.display = "block";
        return false;
    }




    /*Verifica os dados 
    if (/[0-9]/gm.test(x) || x == '' || /[!@#$%*()_+^&{}}:;?.]/gm.test(x)) {
        console.log('invalido');
        document.getElementById("mostrar").style.display = "block";
        return false;
    } else if (y == '') {
        document.getElementById("mostrar2").style.display = "block";
        return false;
    } else {
        console.log('DADO VALIDO');
        return true;
    }

*/



}

function validarEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}