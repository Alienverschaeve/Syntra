Functies: het volume van een zwembad berekenen

We vertrekken van de functie die de oppervlakte van een cirkel berekent:
function oppervlakte( $straal )
{
    $opp = round($straal \*_ 2 _ pi(), 2);
return $opp;
}

Breid dit script uit met een nieuwe functie die het aantal liter berekent dat in een cylindervorming zwembad gaat. De hoogte van het zwembad, en de straal zijn parameters van deze nieuwe functie.
De formule voor de berekening van de inhoud van het zwembad is oppervlakte \* hoogte. Opgelet: je krijgt dan het resultaat in kubieke meter (m³), niet in liter. Zoek uit hoe je de omzetting van kubieke meter naar liter doet.
Bereken de inhoud (in liter) voor zwembaden met volgende afmetingen:

- doorsnede 3m, hoogte 0.5m
- doorsnede 4m, hoogte 0.6m
- doorsnede 5.5m, hoogte 0.8m

Uitbreiding: sommige zwembaden hebben een andere diameter onderaan dan bovenaan. Maak een nieuwe functie om ook de inhoud van die zwembaden te berekenen (we gaan ervan uit dat de vorm een perfecte afgeknotte kegel is).

De formule om de inhoud van een afgeknotte kegel te berekenen:
