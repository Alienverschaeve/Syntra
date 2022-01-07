<?php
include "Oef 2.4 St repeat.php";

//Input
$looptijd = readline("Wat is de looptijd? ");
$kapitaal = readline("Wat is het startkapitaal? ");
$intrest = readline("Wat is de intrestvoet in procent? ");

//Output
//hoofding
Echo RechtsUitlijnen('Jaar',10);
Echo RechtsUitlijnen('kapitaal',20);
Echo RechtsUitlijnen('intrest',30);
print "\n";

//Berekening
For ($x = 0; $x <= (int)$looptijd; $x++)
{
    $rente = round(((int)$kapitaal*  (int)$intrest /100),2);
    $kapitaal_format=number_format($kapitaal,2);

    Echo RechtsUitlijnen($x,10);
    Echo RechtsUitlijnen($kapitaal_format,20);
    Echo RechtsUitlijnen($rente,30);
    Echo "\n";
    $kapitaal+=$rente;

}
