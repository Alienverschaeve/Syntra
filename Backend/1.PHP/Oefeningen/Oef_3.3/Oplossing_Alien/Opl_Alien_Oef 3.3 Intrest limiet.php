<?php
//Input
include "Oef 2.4 St repeat.php";

$looptijd = readline("Wat is de looptijd? ");
$kapitaal = readline("Wat is het startkapitaal? ");
$intrest = readline("Wat is de intrestvoet in procent? ");
$isereenlimiet = readline ("Is er een limiet (y/n)? ");

//berekening

If ($isereenlimiet=="y") $limiet = readline("Wat is het limiet? ");
$limiet = (int)0;

For ($x = 0; $x <= (int)$looptijd; $x++) {
    $rente = round(((int)$kapitaal * (int)$intrest / 100), 2);
    $kapitaal_format = number_format($kapitaal, 2);
    $rente_format = number_format($rente, 2);
    echo RechtsUitlijnen($x, 10);
    echo RechtsUitlijnen($kapitaal_format, 20);
    echo RechtsUitlijnen($rente_format, 30);
    echo "\n";
    $kapitaal += $rente;
}
        If ($kapitaal >= $limiet && $limiet > 0)
        {
            Echo "Limiet van $limiet bereikt: kapitaal $kapitaal na $looptijd jaar";
        }

