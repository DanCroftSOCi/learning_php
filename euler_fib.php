<?php
$arr = range(1,999);

$sum = 0;

function fib($max) {
    $last = 0;
    $current = 1;
    yield 1;
    while (true) {
        $current = $last + $current;
        $last = $current - $last;
        if($current >= $max) {
            break;
        }
        yield $current;
    }
}

foreach (fib(4000000) as $num) {
    if ($num % 2 == 0) {
       $sum += $num;
    }
}

echo $sum;
