<?php
$a=rand(0,9);
$b=rand(0,9);
$c=rand(0,9);
$arr_tab=[$a,$b,$c];
echo"soit $a $b et $c <br> l'ordre croissant est : ";
asort($arr_tab);
foreach($arr_tab as $key => $val){
    echo"$val ";
}
echo"<br> l'ordre decroissant est: ";
arsort($arr_tab);
foreach($arr_tab as $key => $val){
    echo"$val ";
}
?>