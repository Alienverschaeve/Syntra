function string_chop(str, nr = 0) {
  if (nr === 0) {
    return [str];
  } else {
    const stukskes = [];
    const aantalKeerDoorlopen = Math.ceil(str.length / nr);
    for (let i = 0; i < aantalKeerDoorlopen; i++) {
      stukskes.push(str.substr(nr * i, nr));
    }
    return stukskes;
  }
}
console.log(string_chop("w3resource", 2));
console.log(string_chop("sandri", 4));
