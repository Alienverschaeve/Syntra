<?php

function RechtsUitlijnen($tekst, $breedte): string
{
    $aantal_spacies = $breedte - strlen($tekst);
    $spacies = str_repeat(" ", $aantal_spacies);

    return $spacies . $tekst;
}

