<?php

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    // Count vowels
    $vowelCount = countVowels($string);
echo $vowelCount;
    // Reverse string
    $reversedString = strrev($string);

    // Output
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString<br>";
}

// Function to count vowels in a string
function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split($string) as $char) {
        if (in_array(strtolower($char), $vowels)) {
            $count++;
        }
    }
    return $count;
}