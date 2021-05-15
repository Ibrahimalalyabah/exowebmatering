<?php
/*: Générer deux nombres puis faire leur permutation.On
affichera les deux nombres avant et après permutations.*/ 
$a=rand(1,9);
$b=rand(1,9);
echo"les deux nombre avant permutation: {$a},{$b} <br>" ;
$c=$a;
$a=$b;
$b=$c;
echo"les deux nombre après permutation: {$a},{$b} <br>";

?>