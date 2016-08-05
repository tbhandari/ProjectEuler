<?php
// If we list all the natural numbers below 10 that are multiples of 3 or 5, we get 3, 5, 6 and 9. The sum of these multiples is 23.
// Find the sum of all the multiples of 3 or 5 below 1000.
$countTo = $argv[1];
if (empty($countTo) || (!empty($countTo) && ctype_digit($countTo) === false)) {
    die('Usage:  php 01-Multipleof3or5.php 123456 (whole, non-negative number)');
}
$startTime = time();

$sumOfMultiples = 0;
for ($i=0; $i<$countTo; $i++) {
    $isMultiple = (($i % 3 == 0) || ($i % 5 == 0)) ? true : false;
    if ($isMultiple) $sumOfMultiples += $i;
}
echo "sumOfMultiples = {$sumOfMultiples}\n";

$endTime = time();
$timeElapsed = $endTime - $startTime;
echo "timeElapsed = {$timeElapsed} seconds\n";
?>