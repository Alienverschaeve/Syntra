Functies: bankrekeningnummers controleren

Maak een functie die een bankrekeningnummer controleert. De controle gebeurt aan de hand van de checkdigit (de laatste 2 cijfers). Die moet gelijk zijn aan de rest van de deling door 97 van de cijfers op posities 5 tot en met 14 (spaties niet meegerekend). Als de rest 0 is, wordt de checkdigit 97.
Maak van onderstaande bankrekeningnummers een lijst (array), en controleer die. Er zitten 3 rekeningnummers in met een foutieve checkdigit. Haal die eruit.
Toon het resultaat op het scherm.
$rek=[
'BE75832844265251',
'BE05352906338775',
'BE78793503484086',
'BE02930902902740',
'BE54679368522400',
'BE79481522145939',
'BE45238582867689',
'BE90351463032632',
'BE85594736411006',
'BE43534698638801',
'BE39862582066154',
'BE96936741435905',
'BE06120041275522',
'BE42102532381041',
'BE27643075640273',
'BE44150090238545',
'BE05501206942175',
'BE38008704680572',
'BE19295595075512',
'BE18319809423665'
];

Output:

Bankrekening BEXXXXXXXXXXXXXX is FOUT HOOR !!!
Bankrekening BEXXXXXXXXXXXXXX is FOUT HOOR !!!
Bankrekening BEXXXXXXXXXXXXXX is FOUT HOOR !!!

(de foute bankrekeningnummers zijn bewust verborgen)
