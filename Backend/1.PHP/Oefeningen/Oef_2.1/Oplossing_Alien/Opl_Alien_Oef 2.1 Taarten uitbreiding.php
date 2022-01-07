<?php
//Input
$aantal_taarten = readline("Hoeveel taarten zijn er?");
$aantal_deelnemers = readline("Hoeveel deelnemers zijn er?");

//Bereken
$aantal_stukken_even = intdiv($aantal_deelnemers, $aantal_taarten ); // 63/15= 4,2
$aantal_stukken_modulo = $aantal_stukken_even + 1;
$aantal_taartenmodulo = $aantal_deelnemers%$aantal_taarten;// 63 /15 = 4,2 (restwaarde 0,2) (0,2*15)=3
$aantal_taarten_even= $aantal_taarten-$aantal_taartenmodulo;

///Output
if ($aantal_taartenmodulo == 0.00)
    echo "Je hebt $aantal_taarten taarten voor " . $aantal_deelnemers . " deelnemers.
Je moet " . $aantal_taarten_even . " taarten in " . $aantal_stukken_even . " stukken snijden.";
    else
        echo "Je hebt $aantal_taarten taarten voor $aantal_deelnemers deelnemers.
Je moet " . $aantal_taarten_even . " taarten in " . $aantal_stukken_even . " stukken snijden.
En " . $aantal_taartenmodulo . " taarten in " . $aantal_stukken_modulo . " stukken.";

