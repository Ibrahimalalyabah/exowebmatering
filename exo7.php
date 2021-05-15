<?php
/*Écrire un script qui génère un nombre supérieur à 10 000 puis affiche
dans:
● une table HTML , les valeurs sont inférieures à la moyenne du
tableau
● une table HTML ,les valeurs supérieures à la moyenne.*/ 
 $nbr=random_int(10001,100001);
 $moy=55001;
 echo"$nbr <br>";
 echo"$moy";
 $arr_inf=[];
 $arr_sup=[];
 $table='<tr>';
 if($nbr<$moy){
     $arr_inf=[$nbr];
     $table.='<th>' .$arr_inf. '<th>';
 }else{
     $arr_sup=[$nbr];
     $table.='<th>' .$arr_sup. '<th>';
 }
$table.='</tr>';
echo $table;

 

?>