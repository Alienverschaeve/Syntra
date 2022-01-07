<?php
function Rechtsuitlijnen ($tekst, $length)
{
    $Ruimte = $length - strlen($tekst);
    ($Ruimte*" ".$tekst);
}
Echo Rechtsuitlijnen("test,20");
