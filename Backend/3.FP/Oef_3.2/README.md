## Oef 3.2  
MySQL – Form Afbeeldingen – Select, sanitize, validate

#Keuzelijst land toevoegen
We vertrekken van het eindresultaat van oef3.1.
Dupliceer deze map en hernoem ze naar oef3.2.

- Voeg in je databank een nieuwe tabel land toe.

- Voorzie in de tabel images een foreign key img_lan_id naar deze tabel. Vul bij elke afbeelding de juiste waarde in:
- Zorg ervoor dat, in het formulier, de keuzelijst Land correct verschijnt – gebaseerd op de tabel in de databank – en dat de gekozen waarde juist opgeslagen wordt in de databank.

#Sanitize values
•	Zorg ervoor dat overtollige witruimte uit de velden verwijderd wordt.

• Converteer speciale tekens naar hun overeenkomstige HTML-entity, zodat je zonder probleem quotes (single en double) kan invoeren in tekstvelden, en kan opslaan.
#Validation
Controleer alle verzonden gegevens aan de hand van het veldtype in de databank. Geef een foutmelding als een foutief type verzonden wordt.
#Security
Voeg een CSRF token toe aan je formulier, en zorg ervoor dat enkel met een geldige CSRF token opgeslagen kan worden.

Oplossing: zie oef3.2
