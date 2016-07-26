<?php

session_start();
include('Database.php');
$dbo = new Database();

$rispostaPassata = $_POST['risposta'];
//questa pagina riceve i valori
/*- risposta : valore della risposta 1,2,3
  - id : valore dell'id della domanda attualmente in domanda.php
 */

//confronto il valore della risposta passata con quello giusto preso dal database
$sql = 'SELECT * FROM domanda WHERE dom_id=:id';
$dbo->query($sql);
$dbo->bind(':id',$_POST['id']);

$domandaAttuale = $dbo->single();

//aumento il contatore di sessione
$_SESSION['dom_ordine']+=1;

if( $rispostaPassata === $domandaAttuale['dom_corretta']){
    //la risposta data è corretta
    
    //nell'array di sessione relativo alle risposta cambio il valore associato alla domanda attuale in 'giusto'
    $_SESSION['vettoreRisposte'][$domandaAttuale['dom_id']-1] = 'giusto';
    echo json_encode('corretta');
}else{
    //la risposta data è errata
    $_SESSION['vettoreRisposte'][$domandaAttuale['dom_id']-1] = 'errato';
    //nell'array di sessione relativo alle risposta cambio il valore associato alla domanda attuale in 'errato'
    echo json_encode('errata');
}



