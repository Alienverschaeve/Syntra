<?php
//Input
$tekst = "Ruim 50.000 kandidaten hengelen in Vlaanderen naar uw stem en hopen " .
    "straks gemeenteraadslid te worden. Het is maar de vraag of ze zo blij gaan " .
    "zijn als die droom in vervulling gaat. De inzet van de lokale verkiezingen, op " .
    "14 oktober, is heel precies in cijfers vastgelegd: er moeten 7.398 nieuwe " .
    "gemeenteraadsleden verkozen worden, verspreid over de 308 Vlaamse " .
    "gemeenten, plus 175 nieuwe provincieraadsleden.";

/* For lus tot er minder dan 40 karakters overblijven.
 selecteer de eerste 40 karakters
ga van achteren zoeken naar de laatste " "
Vervang die spatie naar \n.
Zoek de volgende
 For ($tekst)
 {substr
 */

function SplitParagraph($tekst, $breedte)
{
    $lijnlengte = 0;                                // startwaarde
   $woorden = explode(" ", $tekst);        //Explode zet alle waarden in een array
    for ($i = 0; $i < count($woorden); $i++)        // strlen($tekst kan ook en dan kan de bovenstaande lijn hier ook weg)
    {

       $woord = $woorden[$i] . " ";

        if ($lijnlengte + strlen($woorden) -1 > $breedte) {
            print "\n";
            $lijnlengte = 0;
        }
        print $tekst;
        $lijnlengte += strlen($woorden) ;
    }
}
SplitParagraph($tekst, 40);

