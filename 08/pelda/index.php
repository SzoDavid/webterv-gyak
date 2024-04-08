<?php

//session_start();
//if (!isset($_SESSION['hId'])) {
//    header('Location: login.php');
//    exit();
//}

?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Főoldal</title>
</head>
<body>
<header>
<!--    <span>--><?php //echo $_SESSION['hId'] ?><!--</span>-->
    <form method="POST" action="utils/logout.php">
        <input type="submit" name="submit" value="Kijelentkezés"><br>
    </form>
</header>
<main>
    <h1>Üdv</h1>
</main>
</body>
</html>



