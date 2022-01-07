//const getal = 15;
//const getal2=20.05;

console.log(getal1 + getal2);
// Operators zoals in php + - / % 
// vergelijking is altijd boolean type true or false value
if (getal1 % 2 == 0){
    console.log("even");
} else{
    console.log("oneven");
}


// === datatype ook gelijk in dit geval altijd ongelijk omdat string en integer is
const getal = 15; // int
const getal2= "15"; // string

console.log(getal1 + getal2);
if (getal1  === getal2){
    console.log("gelijk");
} else{
    console.log("niet gelijk");
}

//if functie op 1 lijn
const resultaat = getal1 ===getal2 ? "ja": "nee";
console.log(resultaat)

const loading = true;
//react loading ? <p>Ik ben aan het laden</p>: <ul><li>....</li></ul>