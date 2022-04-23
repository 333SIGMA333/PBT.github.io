<?php
    setcookie('user', $user['name'], 1, "/");
    setcookie('id', $user['id'], 1, "/");
    setcookie('money', $user['money'], 1, "/");
    setcookie('email', $user['email'], 1, "/");
    setcookie('discord', $user['discord'], 1, "/");
    setcookie('telegram', $user['telegram'], 1, "/");
    setcookie('whatsapp', $user['whatsapp'], 1, "/");
    setcookie('skype', $user['skype'], 1, "/");
    setcookie('booster', $user['booster'], 1, "/");
    setcookie('avatar', $user['avatar'], 1, "/");

    header('Location: /PBT_autorization/index.php');
?>