<?php
//Input
$stemmen =  [
    "NVA"=> 2455,
    "SP-A"=> 2856,
    "CD&V"=> 1501,
    "GROEN"=> 1744,
    "OPEN-VLD"=> 1988,
    "VLAAMSBELANG"=> 586,
    "PVDA"=> 697
];
$tekst = "Totaal van de stemmen:";
$tekst2 = "Totaal van de percentages:";
$totaalpercentage = 0;
$Totaalstemmen = 0;

//Berekening

Foreach($stemmen as $Partij =>$Stem)
{
    $Totaalstemmen +=$Stem;
}
printf (Uitlijnen($tekst, $Totaalstemmen,30). "\n\n");

    Foreach ($stemmen as $Partij => $Stem)
        {
            $percentage=$Stem/$Totaalstemmen *100;
            $percentage= number_format($percentage,2);
            $totaalpercentage += $percentage;
            $totaalpercentage = number_format($totaalpercentage,2);

            printf (Uitlijnen($Partij,$percentage,30). "\n");
        }
function Uitlijnen($partij, $percentage, $length)
{
    $aantal_space = $length - strlen($partij) - strlen($percentage);
    $space = str_repeat(' ', max(0,$aantal_space));
    return $partij . $space . $percentage;
}
//Output
printf ("\n".Uitlijnen($tekst2, $totaalpercentage,30));

