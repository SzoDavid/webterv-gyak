<?php

$globalis_valtozo = 'macska';

function macska_simogato() {
//    static $simogatasok_szama = 0;

//    global $globalis_valtozo;
    $globalis_valtozo = 'megsimogatott macska';

//    $GLOBALS['globalis_valtozo'] = 'megsimogatott macska';

//    $simogatasok_szama++;
//    echo "Eddig $simogatasok_szama macskát simogattam meg<br>";
}


echo "Globalis valtozo: '$globalis_valtozo'<br>";


// ---------------------------------------------------------------------------------------------------------------------


function increase(int $num, int $amount=5): int {
    return $num1 + $amount;
}

$num = 5;
//echo 'increase: ' . increase($num, 2) . '<br>';
//echo "num: $num<br>";


// ---------------------------------------------------------------------------------------------------------------------

function avg(int ...$nums): float {
    $sum = 0;
    foreach ($nums as $num) {
        $sum += $num;
    }
    return $sum / count($nums);
}

//echo 'avg: ' . avg(10, 20, 30) . '<br>';
