<?php
$equipes = ['France','Brésil','Argentine','Espagne','Sénégal','Australie','Belgique'];
$choixequipe = readline("Saisir une equipe : ");
$maj=ucfirst($choixequipe);
foreach($equipes as $equipe){
    if ($equipe==$maj){
        echo "l'equipe participe a la CDM";
    } else {
        echo" l'equipe ne participe pas a la CDM";
    }
}