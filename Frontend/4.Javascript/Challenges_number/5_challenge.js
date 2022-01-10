function GetDistance(co1, co2) {
  const A = math.pow(co1[0] - co2[0] - co2[0], 2);
  const B = (co1[1] - co2[1]) ** 2;
  return parseFloat(math.sqrt(A + B).tofixed(2));
}
console.log(getDistance([20, 100], [50, 800]));
