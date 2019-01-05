$arr = range(1,999);

$sum = 0;

foreach ($arr as $a) { 
    if($a % 3 == 0 or $a % 5 == 0) {
        $sum += $a;
    }
}

echo $sum;
