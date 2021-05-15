<?php
/**Générer une phrase puis écrire un script qui enlève tous les espaces inutiles
de la phrase.
Règles de Gestion
● Les espaces inutiles sont:
○ les espaces en début et fin de chaîne
○ les espace avant un point
○ les espaces successives
○ les espaces avant une apostrophe
 */
$chaine=" à l 'après midi omment ça va .";
var_dump($chaine);
//les espaces en début et fin de chaîne
$trimmed=trim($chaine);
var_dump($trimmed);
//les espace avant un point
$chaine=str_replace(" .",".",$chaine);
var_dump($chaine);
//les espaces successives
$chaine=str_replace("  "," ",$chaine);
var_dump("$chaine");
//les espaces avant une apostrophe
$chaine=str_replace(" '","'",$chaine);
var_dump("$chaine");
?>