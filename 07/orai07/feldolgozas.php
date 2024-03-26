<?php

if (!isset($_POST['submit']) || empty(trim($_POST['email'])) || empty(trim($_POST['password']))) {
    header('location: index.html');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Feldolgozás</title>
</head>
<body>
<table>
    <tr>
        <th>Adat</th>
        <th>Érték</th>
    </tr>
    <tr>
        <td>email</td>
        <td><?php echo trim($_POST['email']) ?></td>
    </tr>
    <tr>
        <td>jelszó</td>
        <td><?php echo trim($_POST['password']) ?></td>
    </tr>
    <tr>
        <td>név</td>
        <td><?php echo trim($_POST['name']) ?></td>
    </tr>
    <tr>
        <td>születés dátuma</td>
        <td><?php echo trim($_POST['birth']) ?></td>
    </tr>
    <tr>
        <td>kedvenc szám</td>
        <td><?php echo trim($_POST['number']) ?></td>
    </tr>
    <tr>
        <td>mit gondolsz az axerwáliakokról</td>
        <td><?php echo trim($_POST['axerwaliakok']) ?></td>
    </tr>
    <tr>
        <td>mit akarnak az axerwáliakok</td>
        <td><?php echo (isset($_POST['reasons'])) ? implode(', ', $_POST['reasons']) : '' ?></td>
    </tr>
</table>
</body>
</html>
