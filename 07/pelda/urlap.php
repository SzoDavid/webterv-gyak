<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Urlap</title>
    <style>
        body {
            width: 75%;
            margin: auto;
        }

        input {
            margin-bottom: 15px;
            padding: 5px;
            font-size: medium;
        }

        input[type='text'], input[type='password'], input[type='number'] {
            width: 100%;
        }
    </style>
</head>
<body>
<h1>KonGeRiCe</h1>
<h2>Hallgatói bejelentkezés</h2>
<form action="feldolgozas.php" method="post">
    <label for="hId">h azonosító</label><br>
    <input type="text" id="hId" name="hId" required><br>
    <label for="password">Jelszo</label><br>
    <input type="password" id="password" name="password" required><br>
    <label><input type="checkbox" name="reason[]" value="kotelezo"> Mert kötelező</label><br>
    <label><input type="checkbox" name="reason[]" value="pluszpont"> Mert könnyen lehet sok pluszpontot szerezni</label><br>
    <label><input type="checkbox" name="reason[]" value="axerwaliakok"> Mert félek hogy különben elkapnak az Axerwáliakok</label><br>
    <input type="submit" name="submit" value="Jelen vagyok az órán"><br>
</form>

<?php

if (isset($_POST['submit'])) {
    if (empty(trim($_POST['hId'])) || empty(trim($_POST['password']))) {
        exit ('<img src="concierge_easter.webp" alt="kongerice">');
    }

    echo 'h azonosító: ' . trim($_POST['hId']) . '<br>';
    echo 'jelszó: ' . trim($_POST['password']) . '<br>';

    if (isset($_POST['reason'])) {
        echo 'ok: ' . implode(', ', $_POST['reason']) . ' <br>';
    }
}

?>

</body>
</html>