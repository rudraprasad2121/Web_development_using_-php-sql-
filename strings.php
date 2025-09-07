<?php
$str ="This is a string in PHP.";$lenn =strlen($str);
echo "The length of the string is: $lenn<br>"; // it will return the length
echo "The number of words in the string is: ". str_word_count($str) . "<br>"; // it will return the number of words in the string
echo $str;
echo "<br>";
echo "The reverse of the string is: " . strrev($str) . "<br>"; // it will return the reverse of the string
    echo "The position of 'is' in the string is: " . strpos($str, "is") . "<br>"; // it will return the position of the first occurrence of 'is'
    echo "The string after replacing 'PHP' with 'Python' is: " . str_replace("PHP", "Python", $str) . "<br>"; // it will replace 'PHP' with 'Python'
    // String functions
    $string1 = "Hello";
    $string2 = "World";
    echo "Concatenated string: " . $string1 . " " . $string2 . "<br>"; // concatenation
    echo "Uppercase string: " . strtoupper($string1) . "<br>"; // convert to uppercase
    echo "Lowercase string: " . strtolower($string2) . "<br>"; // convert to lowercase
    echo "String length: " . strlen($string1) . "<br>"; // length of the string
    echo "String comparison: " . strcmp($string1, $string2) . "<br>"; // compare two strings
?>