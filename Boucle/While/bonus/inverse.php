<?php
$phrase = readline("Sasie une phrase qui sera mis a l'envers : ");

$lettre = strlen($phrase) - 1;
$phrase_inverse = ""; //va servir a stocker la variable phrase inverse

while ($lettre>=0) {
    $caractere = substr($phrase, $lettre ,1); // substr() = extraire un caractère à la fois de la phrase d'origine
    $phrase_inverse .=$caractere;
    $lettre--; //-- = décrementer la variable lettre
}
echo "Phrase inversée : $phrase_inverse";