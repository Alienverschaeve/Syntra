<?php

//Berekening
function Deelbaardoor($getal,$deler)
{
    if ($getal%$deler==0) return true;
    else return false;
}

//Input en Output

    For ($x = 0; $x <= 19; $x++)
    {
        $number = random_int(100, 999);
        If (Deelbaardoor($number,7))
        {
            print "$number is deelbaar door 7.\n";
        }
        Else
        {
            Print "$number\n";
        }
    }




