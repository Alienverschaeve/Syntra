//4 verschillende manieren om het aanmaken van strings
const naam = "Romeo";
const naam2 = "Juliette";
const naam3 = "Asterix";
const email = "bl@abla.be";

//Javascript concatenate met + (amper gebruikt in javascript) (PHP met .)
const verwelkoming = "Hallo Ik ben Rome en ik ben 25 jaar oud";
const verwelkoming = "Halllo ik ben" + naam + "en ik ben 40 jaar oud";
const verwelkoming = "Hallo ik ben ${naam} en ik ben 25 jaar oud"; // aanbevolen om het zo te doen - modernste manier

//string method functie kunnen oproepen op elke string
const positievanAt = email.indexOf("@");
// indexOf(searchstring:string, position?: number)=number;
// searchstring -- wat je zoekt
//position?:number (optionele parameter) Vanaf waar begin je te zoeken? of start positie
// =number (hetgene dat we terug geven is een getal) in dit geval nummer 2 tellen vanaf 0
console.log(positievanAt);

// als het niet wordt gevonden --> -1

//Resources voor Javascript - W3schools en MDN Web Docs



const UpperCase=begroeting.toUpperCase() // naar CAPS
console.log(Uppercase)
//kan ook
console.log(begroeting.toUppercase());

//delen van een string substring

const str='W817';
console.log(str.substring(2,3));

//trim (spaties verwijderen van begin of einde)


//replace (vervangt stukjes)
const str="WachtEensEvenEven"
console.log(str.replace("even",""));

// repeat
str.repeat(5)
console.log("-",repeat());

//split  terug is stringarray
const ArrayMetNamen="jos, bert, cindy, tom, bart, Geert".split(",")
console.log(ArrayMetNamen[2]); //(cindy)

//Van array naar String
const nieuwelijstMetnamen = lijstMetNamen.join("-");
console.log(nieuweLijstMetNamen);

//array naar string en string naar array
const ArrayMetNamen="jos, bert, cindy, tom, bart, Geert".split(",").join("-");
console.log(ArrayMetNamen[2]); //(cindy)

//METHOD CHAINING


/* 
Precedence waarde?
console.log(10>5);
TRUE

console.log(10>5>1);
console.log(true>1);
true = 0
FALSE

Alhoewel logische waarde TRUE
*/
