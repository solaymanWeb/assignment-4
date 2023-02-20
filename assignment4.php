<?php
//1. Function to sort an array of strings by length in ascending order:
function sort_by_length($array) {
    usort($array, function($a, $b) {
    return strlen($a) - strlen($b);
    });
    return $array;
   }
   //Example usage:
   $array = array("elderberry", "apple", "cherry", "date",  "fig", "banana",);
   $sorted_array = sort_by_length($array);
   print_r($sorted_array);
   // 2. Function to concatenate two strings, with the second string starting from the end of the 
//    first string:
   function concatenate_strings($string1, $string2) {
    return $string1 . strrev($string2);
   }
   // Example usage:
   $string1 = "Hello";
   $string2 = "World";
   $result = concatenate_strings($string1, $string2);
   echo $result;
   // 3. Function to remove the first and last element from an array and return the remaining 
   
//    elements as a new array:
   function remove_first_and_last($array) {
    array_shift($array);
    array_pop($array);
    return $array;
   }
   // Example usage:
   $array = array( "elderberry", "apple", "cherry", "date",  "banana", "fig");
   $new_array = remove_first_and_last($array);
   print_r($new_array);
   // 4. Function to check if a string contains only letters and whitespace:
   function contains_only_letters_and_whitespace($string) {
    return preg_match('/^[a-zA-Z\s]+$/', $string);
   }
   // Example usage:
   $string1 = "Hello World";
   $string2 = "Hello123World";
   $result1 = contains_only_letters_and_whitespace($string1);
   $result2 = contains_only_letters_and_whitespace($string2);
   echo $result1; // 1 (true)
   echo $result2; // 0 (false)
   // 5. Function to find the second largest number in an array of numbers:
   function find_second_largest($array) {
    rsort($array);
    return $array[1];
   }
   // Example usage:
   $array = array(1, 3, 5, 2, 7, 6, 4);
   $second_largest = find_second_largest($array);
   echo $second_largest;
   