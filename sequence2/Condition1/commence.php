<?php
// Demander la saisi d'un mot et ensuite afficher si le mot commence par p
$mot=readline("Saisi un mot :");
$mot=strtolower($mot);
if (str_starts_with($mot,"p")) {
echo "Le mot commence par la lettre p\n";
} else {
echo "Le mot ne commence pas par la lettre p\n";
}
// si au moins 5 caracteres

if (strlen($mot)>=5) {
echo"Ton mot a + de 5 caractere bravo";
} else {
echo"ton mot n'a pas + de 5 caractere pas bravo";
}
