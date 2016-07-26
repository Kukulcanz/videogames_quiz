/* ognuno dei 3 pulsanti deve eseguire la stessa routine,cioè
 * - confrontare la risposta associata con quella corretta, scritta nel database
 * - sia che sia giusta che sia sbagliata, continuare verso la prossima domanda
 * - se è vera colorare la riga che contiene il pulsante di verde , se falsa di rosso
 * - aggiornare il colore della risposta precedente con le classi rispostaCorretta e rispostaErrata */

function rispondi(valore_risposta, id_domanda,currentElement) {

    var args = {
        risposta: valore_risposta,
        id: id_domanda
    };


    $.ajax('./inc/risposta.php', {
        method: 'POST',
        dataType: 'json',
        data: args,
        success: function (risposta) {
            if (risposta === 'corretta') {
                //risposta data corretta ; colorare di verde e dopo x secondi passare alla prossima domanda
                currentElement.closest('.row').css('backgroundColor','rgb(51, 204, 0)');
                currentElement.css('backgroundColor','rgb(51, 204, 0)');
                window.setTimeout(function () {
                    location.reload();
                }, 3000);
            } else {
                //risposta data errata ; colorare di rosso la riga e dopo x secondi passare alla prossima domanda
                currentElement.closest('.row').css('backgroundColor','red');
                currentElement.css('backgroundColor','red');
                window.setTimeout(function () {
                    location.reload();
                }, 3000);
            }
        },
        error: function (risposta) {
            console.log(risposta);
        }
    });
}


