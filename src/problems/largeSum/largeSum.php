<?php

$rows = file(__DIR__ . '/numbers.txt');

$total = 0;

foreach($rows as $row) {
    $row = substr($row, 0, 13);
    $total += $row;
}
$total = substr($total, 0, 10);
echo "The first 10 digits of the sum are $total";
