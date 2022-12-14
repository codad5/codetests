<?php
/**
 * You are given an array of strings arr. Your task is to construct a string from the words in arr, starting with the 0th character from each word (in the order they appear in arr), followed by the 1st character, then the 2nd character, etc. If one of the words doesn't have an ith character, skip that word.

Return the resulting string.

Example

For arr = ["Daisy", "Rose", "Hyacinth", "Poppy"], the output should be solution(arr) = "DRHPaoyoisapsecpyiynth".

First, we append all 0th characters and obtain string "DRHP";
Then we append all 1st characters and obtain string "DRHPaoyo";
Then we append all 2nd characters and obtain string "DRHPaoyoisap";
Then we append all 3rd characters and obtain string "DRHPaoyoisapsecp";
Then we append all 4th characters and obtain string "DRHPaoyoisapsecpyiy";
Finally, only letters in the arr[2] are left, so we append the rest characters and get "DRHPaoyoisapsecpyiynth";
example

For arr = ["E", "M", "I", "L", "Y"], the output should be solution(arr) = "EMILY".

Since each of these strings have only one character, the answer will be concatenation of each string in order, so the answer is EMILY.

Input/Output

[execution time limit] 4 seconds (php)

[input] array.string arr

An array of strings containing alphanumeric characters.

Guaranteed constraints:
1 ≤ arr.length ≤ 100,
1 ≤ arr[i].length ≤ 100.

[output] string

Return the resulting string.
 */

 function solution($arr) {
    $longest_char = 0;
    for($i = 0; $i < count($arr); $i++)
    {
        if(strlen($arr[$i]) > $longest_char) $longest_char = strlen($arr[$i]);
    }
    $output = "";
    for($i = 0; $i < $longest_char; $i++)
    {
        for($j = 0; $j < count($arr); $j++)
        {
            $output.= isset($arr[$j][$i]) ? $arr[$j][$i] : '';
        }
    }
    return $output; 
}
