# Challenges Strings

1- Write a JavaScript function to check whether a string is blank or not.

console.log(is_Blank('')); => true
console.log(is_Blank('abc')); => false


2- Write a JavaScript function to hide email addresses to protect from unauthorized user.

console.log(protect_email("robin_singh@example.com"));
"robin...@example.com"


3- Write a JavaScript function to insert a string within a string at a particular position (default is 1).

console.log(insert('We are doing some exercises.')); => "We are doing some exercises."
console.log(insert('We are doing some exercises.','JavaScript ')); => "JavaScript We are doing some exercises."
console.log(insert('We are doing some exercises.','JavaScript ',18)); => "We are doing some JavaScript exercises."


4- Write a JavaScript function to chop a string into chunks of a given length.

console.log(string_chop('w3resource')); => ["w3resource"]
console.log(string_chop('w3resource',2)); => ["w3", "re", "so", "ur", "ce"]
console.log(string_chop('w3resource',3)); => ["w3r", "eso", "urc", "e"]

5- Write a JavaScript function to truncate a string to a certain length.

console.log(truncate_string("Robin Singh",4)); => "Robi"

6- Write a JavaScript function to test whether the character at the provided (character) index is lower case.

console.log(isLowerCaseAt ('Js STRING EXERCISES', 1)); => true

7- Write a JavaScript function to test whether a string ends with a specified string.

console.log(endsWith('JS string exercises', 'exercises')); => true

8- Write a JavaScript function to get unique guid (an acronym for 'Globally Unique Identifier?) of the specified length, or 32 by default.

console.log(guid()); => "hRYilcoV7ajokxsYFl1dba41AyE0rUQR"
console.log(guid(15)); => "b7pwBqrZwqaDrex"
