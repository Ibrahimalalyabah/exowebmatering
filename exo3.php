<?php
/**Générer deux nombres entiers puis les afficher dans l'ordre
croissant et dans l’ordre décroissant */
$a=rand(0,9);
$b=rand(0,9);
if($a>$b){
    $max=$a;
    $min=$b;
    echo"soit $a $b l'ordre croissant est: {$min},{$max} <br> l'ordre decroissant est: {$max},{$min}<br>";  
}elseif($a==$b){
    echo"soit $a $b les deux dombres sont egaux";
}elseif($b>$a){
    $max=$b;
    $min=$a;
    echo"soit $a $b l'ordre croissant est: {$min},{$max} <br> l'ordre decroissant est: {$max},{$min}<br>";  
}

?>