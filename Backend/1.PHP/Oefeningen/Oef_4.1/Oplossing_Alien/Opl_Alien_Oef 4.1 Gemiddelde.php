<?php
//Input
$lijst = [ 14, 5, 8, 9, 13, 18, 16, 25 ];
//Berekening
function Gemiddelde($lijst)
{$totaal = 0;
    Foreach($lijst as $number)
    {
        $totaal+=$number;
        return $totaal;
    }
    $aantal = Count($lijst);
    $G= $totaal/$aantal;
}

$G = Gemiddelde( $lijst ) ;
//Output
Echo "Het gemiddelde is $G.";