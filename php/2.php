<?php
/**
 * 
 * An integer n is called a full square, if there exists some integer s, such that n = s * s. Examples of full squares are 0, 1, 4, 9, 16, etc.

Given an array of distinct integers numbers, your task is to find the number of pairs of indices (i, j) such that i ≤ j and the sum numbers[i] + numbers[j] is a full square.

Example

For numbers = [-1, 18, 3, 1, 5], the output should be solution(numbers) = 4.

There is one pair of indices where the corresponding elements sum up to 0:

(0, 3): numbers[0] + numbers[3] = -1 + 1 = 0.
There are two pairs of indices where the corresponding elements sum up to 4:

(0, 4): numbers[0] + numbers[4] = -1 + 5 = 4;
(2, 3): numbers[2] + numbers[3] = 3 + 1 = 4.
There is one pair of indices where the corresponding elements sum up to 36:

(1, 1): numbers[1] + numbers[1] = 18 + 18 = 36;
In total, there are 1 + 2 + 1 = 4 pairs summing up to full squares.

For numbers = [2], the output should be solution(numbers) = 1.

The only pair of indices is (0, 0) and the sum of corresponding elements is equal to numbers[0] + numbers[0] = 2 + 2 = 4, which is a full square. So the answer is 1.
For numbers = [-2, -1, 0, 1, 2], the output should be solution(numbers) = 6.

There are three pairs of indices where the corresponding elements sum up to 0: (0, 4), (1, 3), and (2, 2).
There are two pairs of indices where the corresponding elements sum up to 1: (1, 4) and (2, 3).
There is one pair of indices where the corresponding elements sum up to 4: (4, 4).
In total, there are 3 + 2 + 1 = 6 pairs summing up to full squares.
Input/Output

[execution time limit] 4 seconds (php)

[input] array.integer numbers

An array of distinct integers.

Guaranteed constraints:
1 ≤ numbers.length ≤ 4 · 104,
-2 · 104 ≤ numbers[i] ≤ 2 · 104.

[output] integer

The number of pairs of indices (i, j) such that i ≤ j and the sum of the corresponding elements is equal to some full square.

input [-1, 18, 3, 1, 5]
output: 4
 */