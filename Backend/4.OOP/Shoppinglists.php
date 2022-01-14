<?php

class Shoppinglists
{
#eigenschappen of properties
#zijn private,public of protected


#$sl is een objectvariable, maar ook een instance van de class shoppinglist
$sl-> setShop
private $shop; #bevat een string, bv "Zeeman"
    private $date ; #bevat DateTime
    private $items= [];


    # een methode is een functie in een class
    public function setShop($naam_winkel){
        $this ->shop=$naamw_winkel;
    }
}