Functies, oefening rechts uitlijnen

Maak een functie RechtsUitlijnen, die tekst rechts uitlijnt.
Deze functie neemt als parameters:

- een stuk tekst
- een breedte die de totale lengte (in aantal karakters) van één regel uitdrukt
  Als verschillende stukken tekst (met verschillende lengte) na elkaar aan deze functie doorgegeven worden met dezelfde breedte (bv. 70 karakters), komen de woorden rechts uitgelijnd onder elkaar.

Bv.
RechtsUitlijnen("banaan", 70);
RechtsUitlijnen("nog een banaan", 70);
RechtsUitlijnen("2.30 euro", 70);
RechtsUitlijnen("dit is een hele lange zin", 70);
RechtsUitlijnen("14.10 euro", 70);

Dit geeft dan als output:

    banaan
    nog een banaan
    2.30 euro
    dit is een hele lange zin
    14.10 euro
