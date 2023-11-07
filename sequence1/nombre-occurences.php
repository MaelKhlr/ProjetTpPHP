<?php
$texte= readline("Saisir une phrase :");
$mot= readline("Saisir un mot :");
echo substr_count(strtolower($texte), $mot);