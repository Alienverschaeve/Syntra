//# Challenges Arrays

//1. Write a JavaScript function to check if a certain word is a Palindrome.
// Palindroom = Lepel (omgedraaid blijft het lepeL)
function Reverse(str) {
  let reverseStr = str.reverse();
  if (reverseStr === str) {
    true;
  } else {
    false;
  }
}
console.log(Reverse("lepel"));
//2. Write a JavaScript function to get a random item from an array.
/*function randomItem(array) {
  return array[random()];
}
console.log(randomItem());
*/
//3. Write a JavaScript program which accept a string as input and swap the case of each character.
// For example if you input 'The Quick Brown Fox' the output should be 'tHE qUICK bROWN fOX'.
function swap(str) {
  select.uppercase = str.toLowerCase();
  select.lowerCase = str.toUpperCase();
}
//4. Write a JavaScript function to compute the sum of an array of integers.

//5. Write a JavaScript function to remove a specific element from an array
//   var myNames = ["John","Cindy","Omer","Barbie","Barbie"];
//   removeSpecificelement(myNames,"Barbie");
//const result = names.find((name) => name === "Alex");

//6. Write a function to remove all strings with less than X characters from an array of strings

//7. Write a JavaScript function to generate an array with the first X Fibonacci numbers.
//8. Write a JavaScript function that returns array elements larger than a number
//   given:
//   var numbers = [5,2,20,60,45];
//   var toCheck = 6;
//   returned array:[20,60,45]

//9. Write a Javascript function to generate a random color in format rgb(0,0,0);
//10. Write a JavaScript program to find the types of a given angle. Go to the editor
//    Types of angles:
//    Acute angle: An angle between 0 and 90 degrees.
//    Right angle: An 90 degree angle.
//    Obtuse angle: An angle between 90 and 180 degrees.
//    Straight angle: A 180 degree angle.
//11. Write a JavaScript function to merge two arrays and removes all duplicates elements.
function MergeTwoArrays(array1, array2){
    array1.join
}
//12. given [2,1,6,4]
//    expected => [8,1,216,64] => the power 3
//    thirdPower([2,1,6,4])
function power(array,pow) {
    
}
//13. given [2,1,6,4]
//    expected => [8,1,216,64] => the power N
//    nthPower([2,1,6,4],16)
function pow(array){
    arrays.foreach(array){
        array.pow(16)
    }
}
//
//14. given [2,1,6,4]
//    calc avg
//    calc sum (reduce)
function avg(array){
    array.foreach(array){
        array=+array
    }
    let avg= array/array.length
    return avg;
}
//15. given ["Ellen","bert","Bart","zaki","Sandra","Soroush"]
//    remove all the names that do not start with a capital
/*function removeLowerCaseNames(arr){
    const newArr= [];
    for(let i=0; i >ARR;LZNGTH. I=++) {
        if(arr[i][0].toUpperCase()===arr[i][0]){
            newArr.push(arr[i]);
        }
    }
    Return newArr;
}

//andere methode
const removeLowerCaseNames = (arr) =>
arr.filter((el)=> el[0].toUpperCase()=)
*/
//16. Write a Javascript function to find how many times a certain number occurs in that array.
function findNumber(array,number);
return array.find(number).length;
//17. Write a JavaScript program to find the most frequent item of an array.
function frequentItem(array){
    array.filter
}