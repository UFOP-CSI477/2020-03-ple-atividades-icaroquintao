function myFunction() {
    var input, filter, cards, keep_card, card_titles, i, j, card_test;
    //Script desenvolvido com a ajuda do fórum: https://stackoverflow.com/questions/55668287/bootstrap-4-filter-cards-based-on-title-card-title-and-tag-badge
    input = document.getElementById("myFilter");
    filter = input.value.toUpperCase();
    cards = document.getElementsByClassName("card");
    for (i = 0; i < cards.length; i++) {
        keep_card = false;
        //Seta todas os cards como falso e se acharmos titulo parecido mais a frente, setamos como true
        card_titles = cards[i].querySelectorAll(".card-body h5.card-title");
        card_test = cards[i].querySelectorAll(".list-group-item a.text-dark");
        console.log(card_test);
        console.log(card_titles);


        //Percorre os titulos
        for (j = 0; j < card_titles.length; j++) {
            if (card_titles[j].innerText.toUpperCase().indexOf(filter) > -1) {
                //Achamos, vamos manter
                keep_card = true;
                break;
            }
        }

        for (j = 0; j < card_test.length; j++) {
            if (card_test[j].innerText.toUpperCase().indexOf(filter) > -1) {
                //Achamos, vamos manter
                keep_card = true;
                break;
            }
        }


        //Mostrar ou não os cards, baseado no imput ''Pesquise uma Vaga''
        if (keep_card) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }

    }
}


function myFunction2() {
    var input, filter, cards, keep_card, i, j, card_test;
    //Script desenvolvido com a ajuda do fórum: https://stackoverflow.com/questions/55668287/bootstrap-4-filter-cards-based-on-title-card-title-and-tag-badge
    input = document.getElementById("tipo");
    filter = input.value.toUpperCase();
    cards = document.getElementsByClassName("card");
    for (i = 0; i < cards.length; i++) {
        keep_card = false;
        //Seta todas os cards como falso e se acharmos titulo parecido mais a frente, setamos como true

        card_test = cards[i].querySelectorAll(".list-group-item a.text-dark");




        for (j = 0; j < card_test.length; j++) {
            if (card_test[j].innerText.toUpperCase().indexOf(filter) > -1) {
                //Achamos, vamos manter
                keep_card = true;
                break;
            }
        }


        //Mostrar ou não os cards, baseado no imput ''Pesquise uma Vaga''
        if (keep_card) {
            cards[i].style.display = "";
        } else {
            cards[i].style.display = "none";
        }

    }
}