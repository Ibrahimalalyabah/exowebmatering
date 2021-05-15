<?php
/**Écrire un script qui permet de générer un tableau N de mots. Chaque mot
ne devrait contenir que 20 caractères. Le script affiche tous les mots du
tableau puis détermine et affiche ;
● le mot le plus long et le mot le plus court
● le nombre de mots contenant la lettre « M » (la casse n’est pas tenue
en compte).
● le mot qui a le plus de voyelles
● le mot qui a moins de consonne */
$arr_tab=["azert","azertyu","azertyuio"];
$voyelles=["a","e","i","u","o","y"];
foreach($arr_tab as $key => $val){
    $max="a";
    $min="a";
    $nb=0;
    for ($i = 0; $i<3 ; $i++){
        if($val<$min){
            $min=$val;
            echo"le mot le plus court est: $min";
        }if($val>$max){
            $max=$val;
            echo"le mot le plus court est: $max";
        }if($val="%M%"){
            $nb+=1;
            echo"le nombre de mots contenant la lettre M est: $nb";
        }
    }
}



?>