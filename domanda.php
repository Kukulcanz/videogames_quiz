<?php
session_start();
include('inc/functions.php');

$domanda = seleziona_domanda();
?>
<!DOCTYPE html>
<html lang="it">
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Kuku Quiz</title>
        <!-- CSS -->
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- /CSS -->
    </head>
    <body>
        <div class="container">
            <div class="row visible-lg" id="spazio"></div>
            <div class="row" id="allTest">
                <div class="col-xs-12 col-md-offset-2 col-md-8">
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="pageTitle">JIJUA CLAN OFFICIAL QUIZ</h2>
                        </div>
                    </div>
                    <!-- ./row Titolo -->
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="intestazione">
                                Quanto ne sai sul mondo dei videogiochi?
                            </div>
                        </div>
                    </div>
                    <!--./row intestazione Domanda -->
                    <div class="row" id="risposteRow">
                        <?php
                        $i = 0;
                        foreach ($_SESSION['vettoreRisposte'] as $risposta) {
                            $classePlus;
                            
                            if($risposta === 0 )
                                $classePlus = 'rispostaBase';
                            else if($risposta === 'giusto')
                                $classePlus = 'rispostaCorretta';
                            else if($risposta === 'errato')
                                $classePlus = 'rispostaErrata';
                            ?>                          
                            <div class="col-xs-1 risposta <?php echo $classePlus; ?>">
                                <?php echo $i + 1; ?>
                            </div> 
                            <?php
                            $i++;
                        }
                        ?>
                    </div>
                    <!-- ./row duecolonne -->
                    <div class='row'>
                        <div class='col-xs-3 col-sm-1 numerazioneDomanda'>
                            <?php echo $domanda['dom_ordine']; ?>
                        </div>
                        <div class='col-xs-9 col-sm-11 testoDomanda'>
                            <h3><?php echo $domanda['dom_testo']; ?></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">                            
                            <h2 class="pageFooter"><small>&copy;SIMONE CAVALLI</small></h2>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- ./row allTest -->
        </div>
        <!-- inclusione file -->
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/quiz-start.js"></script>
    </body>
</html>

