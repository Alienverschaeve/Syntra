# Oefening 3.1
Form Afbeeldingen – POST

#Stap 1
- We vertrekken van het eindresultaat van oef2.2.
- Dupliceer deze map en hernoem ze naar oef3.1.
- Dupliceer daarin het script stad.php en sla de kopie op als stad_form.php.

#Stap 2
- Wijzig in steden2.php de hyperlinks op de afbeeldingen als volgt: als je op een hyperlink (“Meer info”) klikt, moet je naar het nieuwe formulier gaan – het script stad_form.php – waarin je alle gegevens betreffende de afbeelding kan aanpassen.

•	gebruik voor de opmaak van het formulier een Bootstrap Form template: zie https://getbootstrap.com/docs/4.0/components/forms/ ; scroll tot aan Readonly plain text en gebruik de getoonde HTML code als basis voor je formulier
# Stap 3
•	voeg alle elementen die je nodig hebt toe aan je formulier: Id, Titel, Filename, Width, Height; voor het id attribuut van elke node gebruik je de veldnaam, bv. img_id

•	voeg een name attribuut toe aan elke input ; de waarde daarvan is dezelfde als het id attribuut, dus de naam van het veld in de databank (img_id, enz.)

•	voeg een Save knop toe; dat is een <input type=submit> om het formulier te verzenden
#Stap 4
•	gebruik de POST methode voor de verzending van je formulier; als action vul je de naam van het script in dat voor het opslaan van de gegevens zorgt: save.php. Vul ook een id en een name in voor het form. De volledige form tag wordt dan bijvoorbeeld:

<form id="mainform" name="mainform" method="POST" action="save.php">

•	Maak nu het nieuwe script save.php. Plaats daarin voorlopig enkel een var_dump($_POST). Post het formulier door op Verzenden te klikken. Bekijk de output van de var_dump.

•	Vervang var_dump($_POST) door print json_encode($_POST). Verzend het formulier opnieuw. Zie je het verschil?

#Stap 5

•	Installeer JSONView als extensie in Google Chrome, en bekijk het resultaat opnieuw (refresh in de browser):



•	maak in save.php een SQL update statement met de gegevens die je ontvangt en toon dat als output; controleer of het syntactisch correct is (voer het eventueel rechtstreeks uit in de databank ter controle)

•	voer in save.php het update statement uit in de databank, vanuit PHP dus; zo sla je de eventueel gewijzigde gegevens op


Oplossing: zie oef31.zip
