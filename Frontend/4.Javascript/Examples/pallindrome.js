// spiegelwoord met dezelfde betekenis
//pallindroom == civic, radar, level, rotor, kayak, madam,
// engels tattarrattat (nonsens
function isPalindroom(str){
    const orig = str;
    const omgedraaid= str.split("").reverse().join() // enkel array kan reversed worden dus string naar array omzetten reversen en daarna terug in een string plaatsen.
    const resultaat= orig===omgedraaid;
    return resultaat;
} 
console.log(isPalindroom("lepel"));


// beter
function isPalindroom(str){
  
  return str ===str.split("").reverse().join();
}
console.log(isPalindroom("Lepel"));

//fat arrow -- wrm refactoren (zo klein mogelijk schrijven of zo beknopt mogelijk )-- minder kans op fouten én sneller laden  (PHP minder belangrijk)
const isPalindroom = (str) => str === str.split("").reverse().join();

console.log(isPalindroom("Lepel"));
