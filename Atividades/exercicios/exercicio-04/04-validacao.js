function cadastrar() {

    let nome = document.dados.nome;
    let cpf = document.dados.cpf;
    let idade = document.dados.idade;


    if (validarNome(nome, "alerta1", "label1") && validarCPF(cpf, "alerta3", "label3") && validarIdade(idade, "alerta4", "label4")) {

        window.alert('Cadastro realizado com Sucesso!');
    }

}

function validarNome(campo, alerta, label) {
    let n = campo.value;

    if (n.length == 0 || parseInt(n) || parseFloat(n)) {
        // Erro
        // Exibir alerta:
        document.getElementById(alerta).style.display = "block";

        // Reporte o campo como inválido
        campo.classList.add("is-invalid");

        // Reportar o label como inválido/atenção:
        document.getElementById(label).classList.add("text-danger");

        // Finalizar
        campo.value = "";
        campo.focus();
        return false;
    }

    // Tudo correto
    document.getElementById(alerta).style.display = "none";
    campo.classList.remove("is-invalid");
    campo.classList.add("is-valid");

    document.getElementById(label).classList.remove("text-danger");

    document.getElementById(label).classList.add("text-success");

    return true;
}

function validarCPF(campo, alerta, label) {
    let n = campo.value;

    if (!TestaCPF(n)) {
        // Erro
        // Exibir alerta:
        document.getElementById(alerta).style.display = "block";

        // Reporte o campo como inválido
        campo.classList.add("is-invalid");

        // Reportar o label como inválido/atenção:
        document.getElementById(label).classList.add("text-danger");

        // Finalizar
        campo.value = "";
        campo.focus();
        return false;
    }

    // Tudo correto
    document.getElementById(alerta).style.display = "none";
    campo.classList.remove("is-invalid");
    campo.classList.add("is-valid");

    document.getElementById(label).classList.remove("text-danger");

    document.getElementById(label).classList.add("text-success");

    return true;
}

function validarIdade(campo, alerta, label) {
    let n = campo.value;

    if (!validadata(n)) {
        // Erro
        // Exibir alerta:
        document.getElementById(alerta).style.display = "block";

        // Reporte o campo como inválido
        campo.classList.add("is-invalid");

        // Reportar o label como inválido/atenção:
        document.getElementById(label).classList.add("text-danger");

        // Finalizar
        campo.value = "";
        campo.focus();
        return false;
    }

    // Tudo correto
    document.getElementById(alerta).style.display = "none";
    campo.classList.remove("is-invalid");
    campo.classList.add("is-valid");

    document.getElementById(label).classList.remove("text-danger");

    document.getElementById(label).classList.add("text-success");

    return true;
}

// Codigo retirado de : https://gist.github.com/joaohcrangel/8bd48bcc40b9db63bef7201143303937
function TestaCPF(cpf) {
    if (typeof cpf !== "string") return false
    cpf = cpf.replace(/[\s.-]*/igm, '')
    if (!cpf ||
        cpf.length != 11 ||
        cpf == "00000000000" ||
        cpf == "11111111111" ||
        cpf == "22222222222" ||
        cpf == "33333333333" ||
        cpf == "44444444444" ||
        cpf == "55555555555" ||
        cpf == "66666666666" ||
        cpf == "77777777777" ||
        cpf == "88888888888" ||
        cpf == "99999999999"
    ) {
        return false
    }
    var soma = 0
    var resto
    for (var i = 1; i <= 9; i++)
        soma = soma + parseInt(cpf.substring(i - 1, i)) * (11 - i)
    resto = (soma * 10) % 11
    if ((resto == 10) || (resto == 11)) resto = 0
    if (resto != parseInt(cpf.substring(9, 10))) return false
    soma = 0
    for (var i = 1; i <= 10; i++)
        soma = soma + parseInt(cpf.substring(i - 1, i)) * (12 - i)
    resto = (soma * 10) % 11
    if ((resto == 10) || (resto == 11)) resto = 0
    if (resto != parseInt(cpf.substring(10, 11))) return false
    return true

}

// Código retirado de: https://pt.stackoverflow.com/questions/298042/validar-campo-data-de-nascimento-com-javascript
function validadata(dataform) {
    var data = dataform; // pega o valor do input
    data = data.replace(/\//g, "-"); // substitui eventuais barras (ex. IE) "/" por hífen "-"
    var data_array = data.split("-"); // quebra a data em array

    // para o IE onde será inserido no formato dd/MM/yyyy
    if (data_array[0].length != 4) {
        data = data_array[2] + "-" + data_array[1] + "-" + data_array[0]; // remonto a data no formato yyyy/MM/dd
    }

    // comparo as datas e calculo a idade
    var hoje = new Date();
    var nasc = new Date(data);
    var idade = hoje.getFullYear() - nasc.getFullYear();
    var m = hoje.getMonth() - nasc.getMonth();
    if (m < 0 || (m === 0 && hoje.getDate() < nasc.getDate())) idade--;

    if (idade < 18) {

        return false;
    }

    if (idade >= 18 && idade <= 60) {

        return true;
    }

    // se for maior que 60 não vai acontecer nada!
    return false;
}