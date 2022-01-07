<?php
//Input
$diameter_boven = readline("Wat is de diameter van de bovenkant van het zwembad in meter?");
$diameter_onder = readline("Wat is de diameter van de onderkant van het zwembad in meter?");
$hoogte=readline("Wat is de hoogte van het zwembad in meter?");
$straal_onder = $diameter_onder/2;
$straal_boven=$diameter_boven/2;

//Berekening
function volume_kegel($straal_onder, $straal_boven, $hoogte)
{
    $VolumeKegel = 1/3 *pi()*$hoogte*(($straal_onder**2)+($straal_onder*$straal_boven)+($straal_boven**2));
    $VolumeKegel*=1000;         // kubieke meters omzetten naar liters
    Echo "Het volume van het kegelvormige zwembad is $VolumeKegel liters.";
}
//Output
volume_kegel($straal_onder, $straal_boven,$hoogte);