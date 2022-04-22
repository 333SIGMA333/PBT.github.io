<?php
    setcookie('user', $user['name'], time() - 3600, "/");
    header('Location: ../PBT_autorization/index.php');
?>