<?php
//Input
//$tekst= readline("Geef een stukje tekst op ");
//$breedte_total= readline("Wat is de totale lengte van de regel?");
        //Input
function RechtsUitlijnen($tekst, $breedte_total)
{
    $lengte_tekst = strlen($tekst);
    $aantalspaties = $breedte_total- $lengte_tekst;
    for ( $x=0; $x < $aantalspaties; $x++)
    {
        print " ";
    }
    return $tekst;

}

//Output
//RechtsUitlijnen($tekst,$breedte_total);
Echo RechtsUitlijnen("banaan", 50). "\n";
Echo RechtsUitlijnen("nog een banaan", 50). "\n";
Echo RechtsUitlijnen("2.30 euro", 50). "\n";
Echo RechtsUitlijnen("dit is een hele lange zin", 50). "\n";
Echo RechtsUitlijnen("14.10 euro", 50). "\n";
