<?php
// Input array of strings
$strings = ["Hello", "World", "PHP", "Programming"];

// Function to count vowels in a string
function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
    $count = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }
    return $count;
}

// Process each string in the array
foreach ($strings as $string) {
    $vowelCount = countVowels($string); // Count vowels
    $reversedString = strrev($string); // Reverse the string

    // Print the result
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString <br>";
}
?>



