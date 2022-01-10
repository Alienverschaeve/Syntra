//Multiplication table
function getRandomInt(max) {
  return Math.floor(Math.random() * max);
}

var x = getRandomInt(9);
for (let i = 1; i < 10; i++) {
  console.log(x, "x", i, "=", i * x);
}
