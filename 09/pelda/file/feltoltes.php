<!DOCTYPE html>
<html lang="hu">
<head>
    <title>Fájlfeltöltés</title>
    <meta charset="UTF-8"/>
    <style>
        input { margin-bottom: 10px; }
    </style>
</head>
<body>
<?php

if (isset($_FILES["pic"])) {
    $extension = strtolower(pathinfo($_FILES['pic']['name'], PATHINFO_EXTENSION));

    echo "A fájl neve: {$_FILES['pic']['name']}<br>";
    echo "A fájl ideiglenes neve: {$_FILES['pic']['tmp_name']}<br>";
    echo "A fájl mérete (bájtokban): {$_FILES['pic']['size']}<br>";
    echo "A fájl típusa: {$_FILES['pic']['type']}<br>";
    echo "A fájl kiterjesztése: $extension<br>";
    echo "Hibakód: {$_FILES['pic']['error']}<br>";

    if ($_FILES['pic']['error'] === 0) {
        $path = 'img/' . $_FILES['pic']['name'];

        move_uploaded_file($_FILES['pic']['tmp_name'], $path);

        echo "<img src='$path' alt='pic'>";
    }
}
?>
<form action="feltoltes.php" method="POST" enctype="multipart/form-data">
    <label for="file-upload">Kép:</label>
    <input type="file" id="file-upload" name="pic" accept="image/*"> <br>
    <input type="submit" name="submit" value="Feltöltés">
</form>
</body>
</html>
