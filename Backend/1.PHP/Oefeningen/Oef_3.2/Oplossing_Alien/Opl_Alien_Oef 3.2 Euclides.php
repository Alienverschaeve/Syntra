<?php
//Input
$getal1= readline("Geef een getal op ");
$getal2 = readline("Geef nog een getal op ");
//Berekening
function Euclides($a,$b)
{
    While($a!= $b)
    {
        if ($a>$b) $a-=$b;
        Else $b-=$a;

    }
    return $a;
}
//Output
$ggd = Euclides($getal1,$getal2);
Echo "De grootste gemene deler van $getal1 en $getal2 is $ggd";