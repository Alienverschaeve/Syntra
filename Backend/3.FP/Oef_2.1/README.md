# Oefening 2.1

-We vertrekken van het eindresultaat van Oefening 1.2, het script index2.php. Sla dit op als steden.php in de nieuwe map oef2.1.

## DESIGN

Zie Designoef2.1

## Stap 1

Maak met DataGrip een nieuwe databank steden onder localhost
•	Maak hierin een tabel images met de velden:

o	img_id
o	img_filename
o	img_title
o	img_width
o	img_height

•	Stop de gegevens betreffende de 3 afbeeldingen (Londen, Parijs, Berlijn) in deze nieuwe tabel; voor img_width en img_height geef je willekeurige informatie op 

•	Zorg ervoor dat de pagina steden.php de informatie betreffende de afbeeldingen ophaalt uit de databank en op basis daarvan de 3 Bootstrap kolommen genereert; voeg ook de width en de height van de afbeeldingen toe, zoals in het voorbeeld:

•	Maak gebruik van een nieuwe functie GetData() om de gegevens uit de database op te halen aan de hand van een opgegeven SQL statement. Dat SQL statement geeft je dus door als argument aan de functie GetData(). Deze functie geeft een array terug; dat zijn de records uit de databasetabel.

## Stap 2

Sla het script steden.php op als steden2.php.

•	Zet onder elke afbeelding een hyperlink ‘Meer info’ waarmee je naar een – nieuw te maken – detailpagina betreffende die afbeelding gaat. Gebruik een parameter img_id in je hyperlink om duidelijk te maken welke afbeelding er getoond moet worden, bv. stad.php?img_id=2

•	Maak voor die detailpagina een nieuw PHP script: stad.php. Hierop toon je de afbeelding met het (in de adresbalk) opgegeven img_id, op 75% van de paginabreedte, en ook alle andere informatie over die afbeelding die beschikbaar is in de databank (zie voorbeeld).

•	Onderaan een hyperlink ‘Terug naar overzicht’ die je terugbrengt naar de pagina steden2.php.

