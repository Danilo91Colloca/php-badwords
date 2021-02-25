<?php 
//sezione variabili 
$textOriginal = " Lorem ipsum dolor sit amet, consectetur adipisci elit,\r\n sed eiusmod tempor incidunt ut labore et dolore magna aliqua.\r\n Ut enim ad minim veniam,\r\n quis nostrum exercitationem ullam corporis suscipit laboriosam,\r\n nisi ut aliquid ex ea commodi consequatur.\r\n Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.\r\n Excepteur sint obcaecat cupiditat non proident,\r\n sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n";
$correction = str_replace('dolor', $argv[1], $textOriginal);
$toTrim = "    Ciccio, Pippo, Pluto   ";
$explode = explode(" ", $textOriginal);


//sezione print

echo "\r\n"; #uso degli spazi per staccare graficamente il titolo del bonus

echo "\r\n******************************************************************** \r\n";
echo "            BONUS DANILO C. SCRIPT DA TERMINALE";
echo " \r\n******************************************************************** \r\n\r\n";

//print del testo lorem ipsum
echo "            Testo Lorem Ipsum Originale\r\n\r\n";
echo $textOriginal;
echo "\r\n>>>>>>>>>>>>>>>>>>>>>>>>>>>>><<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<\r\n";
echo "            Testo Lorem Ipsum Con Censura \r\n\r\n";
echo $correction;

echo "\r\n\r\n******************************************************************** \r\n\r\n";

echo "               Funzione trim(stringa)\r\n\r\n";

echo "                  >>>>>>>senza funzione trim<<<<<<<\r\n\r\n";
echo "vado in città con: " . $toTrim;


echo "\r\n\r\n          >>>>>>>>>>>>>con trim:<<<<<<<<<<< \r\n\r\n";
echo "vado in città con " . trim($toTrim);

echo "\r\n\r\n******************************************************************** \r\n\r\n";

echo "                 >>>>>>>>>>>> Funzione strpos<<<<<<<<<<<<<\r\n\r\n";
echo "cerco in lorem ipsum la posizione della parola <<aliquid>> \r\n\r\n";
echo "la posizione è: " . strpos($textOriginal, 'aliquid') . "\r\n\r\n";

echo "\r\n\r\n******************************************************************** \r\n\r\n";

echo "                 >>>>>>>>>>>> Funzione str_replace<<<<<<<<<<<<<\r\n\r\n";

echo "                 >>>>>>>>>>>>modifico la prima parte del Lorem Ipsum <<<<<<<<<<< \r\n\r\n";

echo str_replace("Lorem ipsum dolor sit amet,", "Pippus, Plutus et Paperinus,", $textOriginal);

echo "\r\n\r\n******************************************************************** \r\n\r\n";

echo "                 >>>>>>>>>>>> Funzione axplode<<<<<<<<<<<<<\r\n\r\n";

echo "                 >>>>>>>>>>>>frammento il Lorem Ipsum laddove ci sono gli spazi <<<<<<<<<<< \r\n\r\n";
echo $explode[1] . "\r\n";
echo $explode[2] . "\r\n";
echo $explode[3] . "\r\n";
echo $explode[4] . "\r\n";
echo $explode[5] . "\r\n";
echo "\r\n\r\nsfrutto l'explode per invertire l'ordine delle parole\r\n\r\n";
echo $explode[5] . " " . $explode[4] . " "  . $explode[3] . " " . $explode[2] . " " . $explode[1] . "\r\n\r\n";