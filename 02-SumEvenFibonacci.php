<?php
// Each new term in the Fibonacci sequence is generated by adding the previous two terms. By starting with 1 and 2, the first 10 terms will be:
// 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, ...
// By considering the terms in the Fibonacci sequence whose values do not exceed four million, find the sum of the even-valued terms.
$countTo = $argv[1];
if (empty($countTo) || (!empty($countTo) && ctype_digit($countTo) === false)) {
    die('Usage:  php 02-EvenFibonacci.php 123456 (whole, non-negative number)');
}
$startTime = time();

$term1 = 0;
$term2 = 1;
$termNext = 0;
$sumOfEvens = 0;
$termList = "{$term1}, {$term2}";
while ($term2 < $countTo) {
    $termNext = $term1 + $term2;
    $term1 = $term2;
    $term2 = $termNext;
    $termList .= ", {$termNext}";
    if ($termNext % 2 == 0) $sumOfEvens += $termNext;
}
echo "termList = {$termList}\n";
echo "sumOfEvens = {$sumOfEvens}\n";

$endTime = time();
$timeElapsed = $endTime - $startTime;
echo "timeElapsed = {$timeElapsed} seconds\n";
?>