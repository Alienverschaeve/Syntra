// Write a JavaScript function to get unique guid (an acronym for 'Globally Unique Identifier?) of the specified length, or 32 by default.
function guid(aantal = 32) {
  const guid = "";
  const allChars = "azererzre";
  for (let i = 0; i < aantal; i++) {
    const randomChar = allChars[Math.floor(Math.random() * allChars.length)];
    guid += Math.random() > 0.5 ? randomChar : randomChar.toUpperCase();
  }
  return guid;
}
console.log(guid(15));
//console.log(guid()); => "hRYilcoV7ajokxsYFl1dba41AyE0rUQR"
//console.log(guid(15)); => "b7pwBqrZwqaDrex"
