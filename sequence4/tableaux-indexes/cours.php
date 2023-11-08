<?php
// déclaration et initialisation d'un tableau de notes
$notes = [10,12,9,13,7];
// afficher les elements du tableau (notes)
echo $notes [0]; //10
echo $notes [1]; //12
echo $notes [2]; //9
echo "\n";
// afficher les elements du tableau avec boucle for
for($i=0; $i<count($notes); $i++){
    echo $notes[$i]. "|";
}
echo "\n";
echo "\n";
// afficher les elements du tableau avec boucle foreach
foreach($notes as $note){
    echo $note. "|";
}
// afficher les elements avec leur index avec une boucle for
echo "\n";
for($i=0; $i<count($notes); $i ++){
    echo "$i:$notes[$i]"."|";
}
echo "\n";
// afficher les elements avec leur index avec une boucle foreach
foreach($notes as $index=>$note){
    echo "$index:$note" . "|";
}
echo "\n";
// ajouter une nouvelle note dans le tableau
$notes[]=15;
// affichage en mode "debug"
print_r($notes);
echo "\n";
// ajouter plusieurs note d'un coup
array_push($notes, 15,12,8,9,12.5);
print_r($notes);