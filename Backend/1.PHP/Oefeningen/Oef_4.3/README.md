Oefening Associatieve arrays, percentages verkiezingen

Gegeven: een associatieve array 'stemmen' met daarin het aantal stemmen per partij voor een bepaalde gemeente:

$stemmen = [
"NVA"=> 2455,
"SP-A"=> 2856,
"CD&V"=> 1501,
"GROEN"=> 1744,
"OPEN-VLD"=> 1988,
"VLAAMSBELANG"=> 586,
"PVDA"=> 697
];

Maak een script 4-3-verkiezingen.php waarin het percentage per partij uitgerekend en weergegeven wordt:

Gewenste output:

Totaal aantal stemmen: 11827

NVA 20.76
SP-A 24.15
CD&V 12.69
GROEN 14.75
OPEN-VLD 16.81
VLAAMSBELANG 4.95
PVDA 5.89

Totaal van de percentages: 100.00

Totaliseer de percentages van de verschillende partijen, om te zien of de afgeronde precentages wel een totaal van 100.00% opleveren.

Let erop:

- dat de namen van de partijen links uitgelijnd worden
- dat de percentages rechts uitgelijnd worden
- dat er een blanco regel komt na het totaal aantal stemmen bovenaan, en ook één voor het totaal onderaan

Tip: getallen afronden op 2 decimalen doe je met number_format() (zie ook vorige oefeningen)
