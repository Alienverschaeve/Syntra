<script>

// JavaScript implementation of the approach


// Function to find special numbers
function divisibilityCheck(arr, n) {

    // Storing all array elements in a hash
    // and finding maximum element in the array
    let s = new Set();
    let max_ele = Number.MIN_SAFE_INTEGER;
    for (let i = 0; i < n; i++) {
        s.add(arr[i]);

        // Update the maximum element of the array
        max_ele = Math.max(max_ele, arr[i]);
    }
     // Traversing the array elements and storing the array
    // multiples that are present in s in res
    let res = new Set();
    for (let i = 0; i < n; i++) {

        // Check for non-zero values only
        if (arr[i] != 0) {

            // Checking the factors of current element
            for (let j = arr[i] * 2; j <= max_ele; j += arr[i]) {

                // If current factor is already part
                // of the array then store it
                if (s.has(j))
                    res.add(j);
            }
                }
    }

    // For non-distinct elmments
    // To store the frequency of elements
    let mp = new Map();
    for (let i = 0; i < n; i++) {
        if (mp.has(arr[i])) {
            mp.set(arr[i], mp.get(arr[i]) + 1)
             } else {
            mp.set(arr[i], 1)
        }
    }


    let ans = [];
     for (let it of mp) {

        // If frequency is at least 2
        if (it[1] >= 2) {
            if (res.has(it[0])) {

                // If frequency is greater than 1 and
                // the number is not divisible by
                // any other number
                let val = it[1];

                // Then we push the element number of
                // times it is present in the vector
                while (val--)
                    ans.push(it[0]);
            }
        }
         // If frequency is greater than 1 and the number
        // is divisible by any other number
        if (res.has(it[0])) {
            let val = it[1];
  // Then we push the element number of
            // times it is present in the vector
            while (val--)
                ans.push(it[0]);
        }
    } // Print the elements that are divisible by
    // at least one other element from the array
    for (let x of ans.sort((a, b) => a - b))
        document.write(x + " ");
}

// Driver code

let arr = [2, 3, 8, 6, 9, 10];
let n = arr.length

divisibilityCheck(arr, n);

</script>