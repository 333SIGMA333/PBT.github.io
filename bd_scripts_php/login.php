<?php
session_start();


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
$result = ($conn->query("SELECT `password` FROM `users` WHERE `login` = '$login' AND `email` = '$email'")); // запрос на пароль
$hash_pass = $result->fetch_assoc(); // присвоен хэш
if(password_verify($pass, $hash_pass['password']) == true) {
    $result = ($conn->query("SELECT * FROM `users` WHERE `login` = '$login' AND `email` = '$email'")); // запрос на все данные
    $user = $result->fetch_assoc(); // присвоены данные юзера из бд в массив user
} 
else {
    $_SESSION['bad_autorization'] = 1;
    header('Location: /PBT_autorization/index.php');
    exit();
}

// куки аккаунта на 7 дней
setcookie('user', $user['name'], strtotime('+7 days'), "/");
setcookie('id', $user['id'], strtotime('+7 days'), "/");
setcookie('money', $user['money'], strtotime('+7 days'), "/");
setcookie('email', $user['email'], strtotime('+7 days'), "/");
setcookie('discord', $user['discord'], strtotime('+7 days'), "/");
setcookie('telegram', $user['telegram'], strtotime('+7 days'), "/");
setcookie('whatsapp', $user['whatsapp'], strtotime('+7 days'), "/");
setcookie('skype', $user['skype'], strtotime('+7 days'), "/");
if(isset($user['avatar'])){
    setcookie('avatar', $user['avatar'], strtotime('+7 days'), "/");
}


if($user['booster'] == true){
    setcookie('booster', $user['booster'], strtotime('+7 days'), "/");
}



$conn->close();
header('Location: /PBT_profile_buyer/index.php');
?>