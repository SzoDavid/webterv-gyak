<?php

require 'utils/utils.php';

session_start();
if (!isset($_SESSION['hId'])) {
    header('Location: login.php');
    exit();
}

$error = false;

if (isset($_POST['submit'])) {
    $error = true;
    if (!empty(trim($_POST['content']))) {
        $content = trim($_POST['content']);

        $message = ['user' => $_SESSION['hId'], 'content' => $content];

        save_data('data/messages.json', $message);
        $error = false;
    }
}

$messages = load_data('data/messages.json');

?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Főoldal</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
<header>
    <span><?php echo $_SESSION['hId'] ?></span>
    <form method="POST" action="utils/logout.php">
        <input type="submit" name="submit" value="Kijelentkezés"><br>
    </form>
</header>
<main>
    <h1>Fórum</h1>
    <?php foreach ($messages as $message) {  ?>
        <div class="message">
            <p class="author"><?php echo $message['user'] ?></p>
            <p><?php echo $message['content'] ?></p>
        </div>
    <?php } ?>
    <form method="POST" action="index.php">
        <label for="content">Új üzenet</label><br>
        <textarea id="content" name="content"><?php if ($error) echo $_POST['content'] ?></textarea><br>
        <input type="submit" name="submit" value="Küldés">
    </form>
</main>
</body>
</html>
