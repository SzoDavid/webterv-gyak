<?php
    unset($_COOKIE['visits']);
    setcookie("visits", "", time() - 3600);
    header("Location: sutik.php");
