<?php
//Input
$straal = readline("Is er een straal gekend in meter?(y/n)");
If ($straal== "y") {
    $straal = readline("Wat is de straal van het zwembad in meter?");
}
Else
{
    $diameter = readline("Wat is de diameter van het zwembad in meter?");
    $straal = $diameter/2;
}
$hoogte = readline("Wat is de hoogte van het zwembad in meter?");
    //Berekening
function oppervlakte( $straal )
{
    $opp = round($straal ** 2 * pi(), 2);
    return $opp;
}
function volume($hoogte, $straal)
{
    $opp = round($straal ** 2 * pi(), 2);
    $volume = $opp*$hoogte;
    $volume*=1000;              //volume omzetten naar liters ipv kubieke meters.
echo "Het volume van het zwembad is $volume liters";
}

//Output
Volume($hoogte, $straal);