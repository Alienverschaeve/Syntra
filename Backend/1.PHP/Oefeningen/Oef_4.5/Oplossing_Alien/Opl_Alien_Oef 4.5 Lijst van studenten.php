<?php
//Include "Oef 4.4 Studenten.php"; // Include toont ook het resultaat van de vorige oef.
// Dus dan moet het met een For each zie voorbeeld leerkracht
ob_start();             // kopiiert enkel de functie van de andere oefening! Woohooo less - much less work!
require 'Oef 4.4 Studenten.php';
ob_end_clean();
//Input
$studenten =    [
    [
        "voornaam"=> "Jan",
        "naam"=> "Janssens",
        "straat"=> "Oude baan",
        "huisnr"=> "22",
        "postcode"=> 2800,
        "gemeente"=> "Mechelen",
        "geboortedatum"=> "14/05/1991",
        "telefoon"=> "015 24 24 26",
        "e-mail"=> "jan.janssens@gmail.com"
    ],
    [
        "voornaam"=> "Piet",
        "naam"=> "Peeters",
        "straat"=> "Molenlei",
        "huisnr"=> "3",
        "postcode"=> 2100,
        "gemeente"=> "Deurne",
        "geboortedatum"=> "7/7/1992",
        "telefoon"=> "03 14 15 78",
        "e-mail"=> "piet.peeters@microsoft.com"
    ],
    [
        "voornaam"=> "Mieke",
        "naam"=> "Verlinden",
        "straat"=> "Lentelei",
        "huisnr"=> "18B",
        "postcode"=> 2640,
        "gemeente"=> "Mortsel",
        "geboortedatum"=> "28/7/1993",
        "telefoon"=> "03 99 65 44",
        "e-mail"=> "mieke_verlinden@bol.com"
    ]
];
Echo StudentToTable($studenten[0]);
Echo StudentToTable($studenten[1]);
Echo StudentToTable($studenten[2]);