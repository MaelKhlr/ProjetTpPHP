<?php
$note = readline ("saisie une note ");
while($note>20 ||$note<0){
    echo " la note saisie doit etre comprise entre 0 et 20";
    echo PHP_EOL;
    $note = readline ("saisie une note ");
}
Echo "la note saisie est correcte !";