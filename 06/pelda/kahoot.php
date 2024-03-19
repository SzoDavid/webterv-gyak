<?php

function a($tomb) {
    foreach ($tomb as $item => $value) {
        $value = strtoupper($value);
    }
}

function varazslat($szoveg) {
    $macska = [];
    foreach (explode(";", $szoveg) as $elem) {
        if ($elem === "") {
            continue;
        }

        $macska[$elem]++;
    }

    return $macska;
}

function biro($tomb) {
    $pont = 0;
    $nev = null;
    foreach ($tomb as $n => $pontszam) {
        if ($pontszam > $pont) {
            $pont = $pontszam;
            $nev = $n;
        }
    }

    return $nev;
}

function b(&$tomb) {
    foreach ($tomb as $item => &$value) {
        $value *= 1.5;
    }
}


//$tomb1 = ["macska", "axerwáliakok", "tehén"];
//a($tomb1);
//print_r($tomb1);

//$szoveg1 = "macska;tehén;tehén;elefánt;macska";
//print_r(varazslat($szoveg1));

//$tomb2 = ["Macskák" => 15, "Olga" => 50, "Zoltán" => 25];
//echo biro($tomb2);

$tomb3 = ["Kukorica" => 450, "Kőbambi" => 300, "Ceres kenyér" => "1000"];
b($tomb3);
print_r($tomb3);
