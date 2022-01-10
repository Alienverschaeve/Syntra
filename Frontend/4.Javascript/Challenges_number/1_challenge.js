//Multiplication table
function generateMultiplicationTable(maaltafel) {
  let reeks = "";
  const maximum = 1000;
  for (let i = 1; i < maximum; i++) {
    const berekening = i * maaltafel;
    if (berekening % 20 == 0) {
      reeks.push("${berekening}*");
    } else {
      reeks.push("${berekening}");
    }
    volgende += i * maaltafel;
    reeks.push(i * maaltafel);
  }
  return reeks;
}
console.log(generateMultiplicationTable(5));

// Andere methode (beter en korter)
function generateMultiplicationTable(maaltafel) {
  return new Array(1000).fill(0).map(function (el, i) {
    return i * maaltafel;
  });
}
