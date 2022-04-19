<?php

$email = filter_var(stripslashes(trim($_POST['email'])),FILTER_SANITIZE_STRING);
$login = filter_var(stripslashes(trim($_POST['login'])),FILTER_SANITIZE_STRING);
$pass = filter_var(stripslashes(trim($_POST['pass'])),FILTER_SANITIZE_STRING);
$money = '0';



// Create connection -----------------------------------------
require "connect.php";
// Check connection ------------------------------------------
if ($conn->connect_error) {
    echo "<br>".'Ошибка соединения: '.$mysqli->connect_error;
    die("<br>"."Connection failed: " . $conn->connect_error);
}




// проверка пароля и проверка на присутствие аккаунта в бд
$result = ($conn->query("SELECT `password` FROM `users` WHERE `login` = '$login' AND `email` = '$email'"));
$hash_pass = $result->fetch_assoc(); // присвоен хэш
if(password_verify($pass, $hash_pass['password']) == true) {
    echo '<br>'.'Такой аккаунт существует в бд ';
} 
else {
    echo '<br>'.'Такой аккаунт не существует в бд ';
    exit();
}


// куки аккаунта на 7 дней
setcookie('user', $user['name'], time() + 3600 * 24 * 7, "/");


$conn->close();

header('Location: /PBT_autorization/index.html');
?>