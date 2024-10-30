<?php

function sumArray($numbers) {
    return array_sum($numbers);
}


$input = [5, 15, 25, 35, 45];
$result = sumArray($input);
echo "The sum is: " . $result;  // Output: The sum is: 15


?>