<?php

include("Database.php");
//SELEZIONA_DOMANDA : restituisce una singola domanda
function seleziona_domanda(){
    $dbo = new Database();
    $sql = 'SELECT * FROM domanda ORDER BY dom_ordine LIMIT :ordine,1';
    
    $dbo->query($sql);
    $dbo->bind(':ordine',$_SESSION['dom_ordine']-1);
    
    return $dbo->single();
}
?>

