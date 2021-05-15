<?php
$a=rand(-10,10);
$b=rand(-10,10);
$c=rand(-10,10);
if($b!=0){
    $z=($b**2)-(4*$a*$c);
    if($z>0){
        $x1=(-$b-sqrt($z))/(2*$a);
        $x2=(-$b+sqrt($z))/(2*$a);
        echo"soit l'equation: {$a}x2 + {$b}x + $c <br> de l'équation deux solutions x1=$x1 et  x2=$x2";
    }if($z<0){
        echo"soit l'equation: {$a}x2 + {$b}x + $c <br>  l'équation n'admet pas de solution réelle ";
    }elseif($z==0){
        $x0=(-$b)/(2*$a);
        echo"soit l'equation: {$a}x2 + {$b}x + $c <br>  l'équation admet une solution unique: $x0";
    }
}else{
        echo"la valeur de b doit être different de 0";
    }


?>