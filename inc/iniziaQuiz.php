<?php
session_start();

//inizializzo il vettore con le risposte
$_SESSION["vettoreRisposte"] = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
$_SESSION['dom_ordine'] =1;

echo json_encode("risposta positiva");
?>

