<?php

echo "KONGERICE!!!!!<br>";
//print

//exit("Vege :c");
//die(0);

$macska = "Axerwáliakok";

//echo 'Jönnek az $macska <br>';

define("ELET_ERTELME", 42);
const WEBTERV_NEHEZ_GYAK = FALSE;

$szam = PHP_INT_MAX;

//echo "$szam-en vannak az $macska <br>";

$tomb1 = array('kutya', 'macska', 'tehén', 45, 3.14, FALSE);
$tomb2 = ['kutya', 'macska', 'tehén', 45, 3.14, true];

//print_r($tomb1);
//echo '<br>';
//print_r($tomb2);
//echo '<br>';

$eletkor = 12;

//if ($eletkor < 18) {
//    echo "Kiskorú vagy. <br>";
//    echo "Még " . (18 - $eletkor) . " év, és nagykorú leszel.<br>";
//} elseif ($eletkor >= 20 && $eletkor <= 29) {
//    echo "Huszonéves vagy. <br>";
//} else {
//    echo "Nagykorú vagy. <br>";
//}

//echo $szam % 2 === 0 ? "Páros. <br>" : "Páratlan. <br>";

$erdemjegy = 5;

//switch ($erdemjegy) {
//    case 1:
//        echo "Elégtelen <br>";
//        break;
//    case 2:
//        echo "Elégséges <br>";
//        break;
//    case 3:
//        echo "Közepes <br>";
//        break;
//    case 4:
//        echo "Jó <br>";
//        break;
//    case 5:
//        echo "Jeles <br>";
//        break;
//    default:
//        echo "Érvénytelen érdemjegy! <br>";
//}

//echo match ($erdemjegy) {
//        1 => "Elégtelen",
//        2 => "Elégséges",
//        3 => "Közepes",
//        4 => "Jó",
//        5 => "Jeles",
//        default => "Érvénytelen érdemjegy!",
//    } . '<br>';

$i = 1;
//while ($i <= 10) {
//    echo $i . "<br>";
//    $i++;
//}

$i = 1;
//do {
//    echo $i . "<br>";
//    $i++;
//} while ($i <= 10);

//for ($i = 1; $i <= 10; $i++) {
//    echo $i . "<br>";
//}

$arak = ["szendvics" => 220, "tea" => 70, "csoki" => 150];

//foreach ($arak as $ar) {
//    echo $ar . "<br>";
//}

//foreach ($arak as $ar) {
//    $ar = $ar * 0.9;
//}
//print_r($arak);
//echo "<br>";

//foreach ($arak as &$ar) {
//    $ar = $ar * 0.9;
//}
//print_r($arak);
//echo "<br>";
