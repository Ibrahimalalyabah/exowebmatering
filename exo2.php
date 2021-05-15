<?php
/* Générer deux points puis calculer et afficher la
distance entre les deux points.Un point est caractérisé par son abscisse et
son Ordonnée.*/ 
$x=rand(0,9);
$y=rand(0,9);
$m=rand(0,9);
$n=rand(0,9);
$a=[$x,$y];
$b=[$m,$n];
$d=sqrt(($x-$m)**2+($y-$n)**2);
echo " la distance est: $d";
?>