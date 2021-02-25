
<!--
  Creare una variabile con un paragrafo di testo. Usate pure il Lorem Ipsum.
  Scrivere a schermo la lunghezza del paragrafo.
  Infine, visualizzare il paragrafo sostituendo la badword passata in GET con tre *.
-->

<?php

//variabile contenente il testo Lorem ipsum.
$text = 'Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
//variabile che contiene una funzione che misura la lunghezza del testo/stringa
$textLenght = strlen($text);

//var_dump per verificare il corretto funzionamento delle variabili

// var_dump('quest è il testo: ' . $text . 'questa è la sua lunghezza: ' . $textLenght);

//variabile che contiene una funzione per sostituire la parola errata all'interno del mio testo/stringa dalla query string

$textCorrection = str_replace('reprehenderit', $_GET['word'], $text);
// var_dump($textCorrection);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DC</title>
  </head>
  <body>
    <h1 style="margin-bottom : 20px;">
    Questo è il testo originale
    </h1>
    <p style="width : 400px;  margin-bottom : 70px">
      <?php echo $text ?>
    </p>

    <h1 style="margin : 0px 15px 25px 0px; display : inline-block">
      Questa è la lunghezza del paragrafo:
    </h1>
    <span style="font-size : 25px">
      <?php echo $textLenght ?>
    </span>

    <h1 style="margin-bottom : 20px;">
    Questo è il testo corretto in GET
    </h1>
    <p style="width : 400px;  margin-bottom : 70px">
      <?php echo $textCorrection ?>
    </p>

    
  </body>
</html>