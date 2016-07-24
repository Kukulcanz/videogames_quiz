<?php
session_start();

//inizializzo il vettore con le risposte
$_SESSION["vettoreRisposte"] = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

echo json_encode("risposta positiva");
?>

