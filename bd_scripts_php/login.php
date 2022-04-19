<?php

$email = filter_var(stripslashes(trim($_POST['email'])),FILTER_SANITIZE_STRING);
$login = filter_var(stripslashes(trim($_POST['login'])),FILTER_SANITIZE_STRING);
$pass = filter_var(stripslashes(trim($_POST['pass'])),FILTER_SANITIZE_STRING);
$money = '0';



// создание Хэша
$pass = md5($pass."fasf12c");



// Create connection -----------------------------------------
require "connect.php";
// Check connection ------------------------------------------
if ($conn->connect_error) {
    echo "<br>".'Ошибка соединения: '.$mysqli->connect_error;
    die("<br>"."Connection failed: " . $conn->connect_error);
}



// проверка записи в бд
$result = $conn->query("SELECT * FROM `users` WHERE `email` = '$email' AND `login` = '$login' AND `password` = '$pass'");
$massive = $result->fetch_assoc();
if(count($massive) == 0) {
    echo '<br>'.'Такой аккаунт не существует в бд ';
    exit();
}
else {
    echo '<br>'.'Такой аккаунт существует в бд ';
}

// куки аккаунта на 7 дней
setcookie('user', $user['name'], time() + 3600 * 24 * 7, "/");


$conn->close();

header('Location: /PBT_autorization/index.html');
?>