# Oefening 1.1

Een array omzetten naar HTML table

Gegeven onderstaande associatieve array, met gegevens betreffende een student.

$student =	array(
"voornaam" =>  "Jan",
"naam" =>  "Janssens",
"straat" =>  "Oude baan",
"huisnr" =>  "22",
"postcode" =>  2800,
"gemeente" =>  "Mechelen",
"geboortedatum" =>  "14/05/1991",
"telefoon" =>  "015 24 24 26",
"e-mail" =>  "jan.janssens@gmail.com"
);

Zet deze gegevens met een PHP functie StudentToTable() om naar een HTML-tabel, voorafgegaan door een h1 element, zodat de output er zo uitziet:

<h1>Student</h1>
<table>
<tr><td>Voornaam</td><td>Jan</td></tr>
<tr><td>Naam</td><td>Janssens</td></tr>
<tr><td>Straat</td><td>Oude baan</td></tr>
<tr><td>Huisnr</td><td>22</td></tr>
<tr><td>Postcode</td><td>2800</td></tr>
<tr><td>Gemeente</td><td>Mechelen</td></tr>
<tr><td>Geboortedatum</td><td>14/05/1991</td></tr>
<tr><td>Telefoon</td><td>015 24 24 26</td></tr>
<tr><td>E-mail</td><td>jan.janssens@gmail.com</td></tr>
</table>

Let erop dat de labels met een hoofdletter moeten beginnen.

Sla je programma op als student.php. Bekijk dat in een browser (Chrome): localhost/…/student.php:

