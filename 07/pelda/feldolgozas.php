<?php
    if (!isset($_POST['submit']) || empty(trim($_POST['hId'])) || empty(trim($_POST['password']))) {
        header('location: urlap.php');
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
        <td>h azonosito</td>
        <td><?php echo trim($_POST['hId']) ?></td>
    </tr>
    <tr>
        <td>jelszó</td>
        <td><?php echo trim($_POST['password']) ?></td>
    </tr>
    <?php if (isset($_POST['reason'])) { ?>
        <tr>
            <td>okok</td>
            <td><?php echo implode(', ', $_POST['reason']) ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>