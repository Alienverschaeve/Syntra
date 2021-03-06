Oefening intrestberekening

Maak een script dat de rente berekent voor een door de gebruiker opgegeven kapitaal, intrestvoet en een aantal jaar.
Maak gebruik van een lus (for of while loop) om voor elk jaar het kapitaal en de rente te berekenen, en te printen (zie output hieronder).
Het kapitaal wordt elk jaar verhoogd met de intrest. De intrest voor het volgende jaar wordt telkens berekend op het verhoogde kapitaal.
Rond de bedragen af op 2 decimalen.
Zorg ervoor dat de jaren en bedragen rechts uitgelijnd zijn in kolommen van een opgegeven aantal karakters. Gebruik hiervoor de functie RechtsUitlijnen() die je in een vorige oefening maakte.
Tip:
• gebruik number_format( 1000, 2 ) om het getal 1000 weer te geven als 1000.00. Dat werkt natuurlijk ook met andere getallen, en ook met variabelen.

Voorbeeld output:
Wat is het kapitaal? 1000
Wat is de intrest in procenten? 3
Wat is de looptijd? 10

    Jaar     Kapitaal    Rente
       1      1000.00    30.00
       2      1030.00    30.90
       3      1060.90    31.83
       4      1092.73    32.78
       5      1125.51    33.77
       6      1159.28    34.78
       7      1194.06    35.82
       8      1229.88    36.90
       9      1266.78    38.00
      10      1304.78    39.14

Uitbreiding

Laat je programma stoppen op een bepaalde – door de gebruiker opgegeven – limietwaarde bv. 1200.
• Vraag of er een limiet is:
o Als er een limiet is, dan stop je de berekening – en de output – zodra het kapitaal (verhoogd met de verworven rente) meer is dan de opgegeven limiet
o Als er geen limiet is, dan reken je verder voor de volledige looptijd
Voorbeeld:
Wat is het kapitaal? 1000
Wat is de intrest in procenten? 3
Wat is de looptijd? 10
Is er een limiet? y
Wat is de limiet? 1200

    Jaar     Kapitaal    Rente
       1      1000.00    30.00
       2      1030.00    30.90
       3      1060.90    31.83
       4      1092.73    32.78
       5      1125.51    33.77
       6      1159.28    34.78
       7      1194.06    35.82

Kapitaal + rente is na 7 jaar 1229.88 euro, dus mogen we stoppen, want er is een limiet van 1200 opgegeven.
