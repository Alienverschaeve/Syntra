// Write a JavaScript function to test whether the character at the provided (character) index is lower case.

console.log(isLowerCaseAt ('Js STRING EXERCISES', 1)); => true

function isLowerCaseAt(str, pos) {
  return str[pos] === str[pos].toLowerCase();
}
console.log(isLowerCaseAt("Is string exercises", 1));
// Opgelost!