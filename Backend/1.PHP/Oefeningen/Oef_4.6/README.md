Oefening functies: SplitParagraph

Gegeven volgende code:

$tekst = "Ruim 50.000 kandidaten hengelen in Vlaanderen naar uw stem en hopen " .
"straks gemeenteraadslid te worden. Het is maar de vraag of ze zo blij gaan " .
"zijn als die droom in vervulling gaat. De inzet van de lokale verkiezingen, op " .
"14 oktober, is heel precies in cijfers vastgelegd: er moeten 7.398 nieuwe " .
"gemeenteraadsleden verkozen worden, verspreid over de 308 Vlaamse " .
"gemeenten, plus 175 nieuwe provincieraadsleden.";

print $tekst;
print "=========";

Laat deze code eens lopen in de terminal: je merkt dat de tekst op enkele hele lange regels geprint wordt, wat onpraktisch is. Ook worden woorden willekeurig gesplitst waar dat niet wenselijk is.

Dat gaan we veranderen.

Verwijder de 2 laatste lijnen code. Schrijf nu de nodige code, om de paragraaf te printen met maximaal 40 karakters per regel. Je dient de regel telkens af te breken op de laatste spatie (vooraleer je aan 40 karakters gekomen bent).

Tip: maak eerst een Nassi-Shneiderman diagram om het algoritme uit te schrijven.
