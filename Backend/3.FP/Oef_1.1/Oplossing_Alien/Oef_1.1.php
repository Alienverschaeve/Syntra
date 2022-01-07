<?php
$studenten=
    [
        [
            "voornaam" =>"Jan",
            "naam"=>"Janssens",
            "straat"=>"Oude baan",
            "huisnr"=>"22",
            "postcode" => 2800,
            "gemeente"=>"Mechelen",
            "geboortedatum"=>"14/05/1991",
            "telefoon"=>"015 24 42 26",
            "e-mail"=>"jan.janssens@gmail.com"],
        [
            "voornaam" =>"Paul",
            "naam"=>"Hoeden",
            "straat"=>"Hoedenmakersstraat",
            "huisnr"=>"28",
            "postcode" => 8000,
            "gemeente"=>"Brugge",
            "geboortedatum"=>"16/01/1990",
            "telefoon"=>"056 423448",
            "e-mail"=>"Paul.Hoeden@gmail.com"
        ]
    ]
;


    function StudentToTable($studenten)
    {
        foreach ($studenten as $student) {
            print"<h1>Studenten</h1>";
            print"<table/>";
            foreach ($student as $key => $value) {
                // label moet met een hoofdletter beginnen -- ucfirst()
                print "<tr><td>" . ucfirst($key) . "</td><td>" . $value . " </td></tr>\n";
            }
            print "</table>";
        }
    }
    print  StudentTotable($studenten);