<?php
require 'utils/utils.php';

$error = false;

session_start();
if (isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}


if (isset($_POST['submit'])) {
    $error = true;
    if (!empty(trim($_POST['username'])) && !empty(trim($_POST['password'])) && !empty(trim($_POST['password2']))) {
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $password2 = trim($_POST['password2']);

        $users = load_data('data/users.json');

        $ok = true;
        if ($password !== $password2) {
            $ok = false;
        }

        foreach ($users as $user) {
            if ($user['username'] === $username) {
                $ok = false;
            }
        }

        if ($ok) {
            $user = ['username' => $username,
                'password' => password_hash($password, PASSWORD_DEFAULT)];

            save_data('data/users.json', $user);

            $_SESSION['username'] = $username;
            header('Location: index.php');
            exit();
        }
    }
}
?>
<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <title>Regisztáció</title>
</head>
<body>
<main>
    <form method="POST" action="signup.php">
        <label for="username">Felhasználó név</label><br>
        <input type="text" id="username" name="username" required><br>
        <label for="password">Jelszó</label><br>
        <input type="password" id="password" name="password" required><br>
        <label for="password2">Jelszó mégegyszer</label><br>
        <input type="password" id="password2" name="password2" required><br>

        <input type="submit" name="submit" value="Regisztráció"><br>

        <?php if ($error) { ?>
            <img src="img/concierge_easter.webp" alt="kongerice">
        <?php } ?>
    </form>
    <a href="login.php">Bejelentkezés</a>
</main>
</body>
</html>
