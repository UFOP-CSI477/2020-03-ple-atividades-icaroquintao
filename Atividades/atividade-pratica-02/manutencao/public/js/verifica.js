function verificaequip() {
    var x = document.getElementById("nome").value;

    console.log(x);
    //Verifica os dados 
    if (/[0-9]/gm.test(x) || x == '' || /[!@#$%*()_+^&{}}:;?.]/gm.test(x)) {
        console.log('invalido');
        document.getElementById("mostrar").style.display = "block";
        return false;
    } else {
        console.log('DADO VALIDO');
        return true;
    }



}

function verificareg() {
    var x = document.getElementById("user_id").value;
    var y = document.getElementById("equipamento_id").value;
    var z = document.getElementById("tipo").value;
    var w = document.getElementById("descricao").value;

    //Verifica os dados 
    if (y == '' || x == '' || z == '' || w == '') {

        document.getElementById("mostrar").style.display = "block";
        return false;
    } else {

        return true;
    }



}