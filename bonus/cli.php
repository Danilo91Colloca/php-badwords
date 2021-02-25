<?php 
//sezione variabili 

$textOriginal = "Lorem ipsum dolor sit amet, consectetur adipisci elit, sed eiusmod tempor incidunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Quis aute iure reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\r\n\r\n";

$correction = str_replace('dolor', $argv[1], $textOriginal);

//sezione print

echo "\r\n\r\n"; #uso degli spazi per staccare graficamente il titolo del bonus
echo "BONUS DANILO C. SCRIPT DA TERMINALE \r\n\r\n\r\n\r\n";
//print del testo lorem ipsum
echo "Testo Lorem Ipsum Originale\r\n\r\n";
echo $textOriginal;

echo "Testo Lorem Ipsum Con Censura \r\n\r\n";
echo $correction;
