<?php
$latogatasok = 1;

if (isset($_COOKIE["visits"])) {
    $latogatasok = $_COOKIE["visits"] + 1;
}

setcookie("visits", $latogatasok, time() + (60*60*24*30));
?>
<!DOCTYPE>
<html lang="hu">
<head>
    <title>Sütik</title>
    <meta charset="UTF-8"/>
</head>
<body>
<?php
if ($latogatasok > 1) {
    echo "Üdvözöllek ismét! Ez a(z) $latogatasok. látogatásod.";
} else {
    echo "Üdvözöllek a weboldalamon! Ez az 1. látogatásod.";
}
?>
<br><br><br><br><br><br>
<a href="suti_torles.php">Süti törlése</a>
</body>
</html>
