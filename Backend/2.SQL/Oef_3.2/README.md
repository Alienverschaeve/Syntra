Databanken – SQL – oefeningen 2

Maak gebruik van de sakila database om volgende oefeningen op te lossen.

1. Geef een alfabetisch overzicht van klanten (customer) en het totaal van hun betalingen (payment):

2. Idem, maar dan per stad:

3. Geef een lijst van klanten met de films die ze gehuurd hebben in de maand juni 2005 zoals hieronder weergegeven:

4. Zet de datum-tijd laatste wijziging van de landen (country) op vandaag, 14u05

5. Haal in DataGrip de DDL van de tabel actor op (“Generate DDL to Clipbboard”), en plak die in Kladblok (op Windows) of TextEdit (op Mac).

Breng dan volgende wijzigingen aan in het DDL statement:
• Verander de naam van de tabel in actor_backup
• Verwijder de index
• Verwijder het automatisch invullen van het veld last_update
Voer het statement dan uit in de sakila database. Je maakt zo een lege kopie van de actor tabel. Controleer of de tabel actor_backup wel bestaat in de databank. Bewaar het DDL statement.

Kopieer dan de inhoud van de tabel actor naar de tabel actor_backup met de MySQL variant van het SELECT INTO statement. Zoek op internet hoe die variant er uitziet in MySQL.

6. Voeg de acteur MATIAS SCHOENAERTS toe aan de tabel actor met een INSERT statement

7. Controleer of MATIAS SCHOENAERTS goed toegevoegd werd met een SELECT statement. Hoe doe je dat? Welk ID heeft deze acteur gekregen?

8. Welk alternatief INSERT statement kon je in vraag 5 ook gebruiken? Test het uit. Onze acteur zit dan tweemaal in de tabel actor.

9. Wijzig de voornaam van MATIAS SCHOENAERTS in MATTHIAS, met een UPDATE statement. Let op! Gebruik het ID om het juiste record te selecteren (en te wijzigen). Controleer het resultaat.

10. Verwijder de twee records betreffende MATTHIAS SCHOENAERTS uit de tabel actor met een DELETE statement. Gebruik opnieuw het ID (of de ID’s) om de juiste records te selecteren (en te verwijderen). Controleer het resultaat. Kan je dat met 1 statement?
