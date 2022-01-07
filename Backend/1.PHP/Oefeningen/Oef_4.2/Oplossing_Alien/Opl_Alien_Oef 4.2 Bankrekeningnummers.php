<?php
//Input
$rek=['BE75832844265251',
    'BE05352906338775',
    'BE78793503484086',
    'BE02930902902740',
    'BE54679368522400',
    'BE79481522145939',
    'BE45238582867689',
    'BE90351463032632',
    'BE85594736411006',
    'BE43534698638801',
    'BE39862582066154',
    'BE96936741435905',
    'BE06120041275522',
    'BE42102532381041',
    'BE27643075640273',
    'BE44150090238545',
    'BE05501206942175',
    'BE38008704680572',
    'BE19295595075512',
    'BE18319809423665'];
// Berekening

function Controle($rek)
{
    foreach ($rek as $reknr)
    {
        $checkdigit = intval(substr($reknr,14, 2)); //(laatste 2 cijfers van het bankrekeningnr
        $midden = intval(substr($reknr,4, 10));// 5 tot 14 op.
        $deler = 97;
        $rest = $midden % $deler;
        If ( $rest === 0 ) $rest = 97;

        If ($rest != $checkdigit)
        {
            echo "Bankrekening $reknr is FOUT HOOR !!!\n";
        }
    }
}

//Output:
Echo Controle($rek);
