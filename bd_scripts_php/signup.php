<?php
session_start();

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
$randomName = substr(str_shuffle($permitted_chars), 0, 10);


$email = filter_var(stripslashes(trim($_POST['email'])),FILTER_SANITIZE_STRING);
$login = filter_var(stripslashes(trim($_POST['login'])),FILTER_SANITIZE_STRING);
$pass = filter_var(stripslashes(trim($_POST['pass'])),FILTER_SANITIZE_STRING);
$money = '0';



// проверка на пустые поля данных
if ($email=='' OR $pass=='' OR $login=='') {
    if ($email=='') {
        $_SESSION['bad_clear_email_message'] = 'Строка почты пустая!';
        header('Location: /PBT_registration/index.php');
    }

    if ($pass=='') {
        $_SESSION['bad_clear_pass_message'] = 'Строка пароля пустая!';
        header('Location: /PBT_registration/index.php');
    }

    if ($login=='') {
        $_SESSION['bad_clear_login_message'] = 'Строка логина пустая!';
        header('Location: /PBT_registration/index.php');
    }
    exit();
}



// проверка на длину
if (strlen($email) > 30 OR strlen($pass) > 32 OR strlen($login) > 32){
    if (strlen($email) > 30) {
       $_SESSION['bad_length_email_message'] = 'Слишком длинная почта!';
        header('Location: /PBT_registration/index.php');
    }

    if (strlen($pass) > 100) {
        $_SESSION['bad_length_pass_message'] = 'Слишком длинный пароль!';
        header('Location: /PBT_registration/index.php');
    }

    if (strlen($login) > 32) {
        $_SESSION['bad_length_login_message'] = 'Слишком длинный логин!';
        header('Location: /PBT_registration/index.php');
    }
    exit();
}



// создание Хэша
$hash_pass = password_hash($pass, PASSWORD_DEFAULT);


// Create connection -----------------------------------------
require "connect.php";
// Check connection ------------------------------------------
if ($conn->connect_error) {
    echo "<br>".'Ошибка соединения: '.$mysqli->connect_error;
    die("<br>"."Connection failed: " . $conn->connect_error);
}



// проверка на уникальность email
$sql = "SELECT email FROM users WHERE email = '$email'";
$result = $conn->query($sql);
if(mysqli_num_rows($result)==0){ 
} else{ 
    $_SESSION['bad_email_message'] = 'Такая почта уже есть!';
    header('Location: /PBT_registration/index.php');
    exit();
}

// проверка на уникальность login
$sql = "SELECT login FROM users WHERE login = '$login'";
$result = $conn->query($sql);
if(mysqli_num_rows($result)==0){ 
} else{ 
    $_SESSION['bad_login_message'] = 'Такой логин уже есть!';
    header('Location: /PBT_registration/index.php');
    exit();
}



// проверка на уникальность зарандомленного имени
$sql = "SELECT name FROM users WHERE name = '$randomName'";
$result = $conn->query($sql);
while(mysqli_num_rows($result)==1) {
    $randomName = substr(str_shuffle($permitted_chars), 0, 10);
    $name = $randomName;
    
    $sql = "SELECT name FROM users WHERE name = '$randomName'";
    $result = $conn->query($sql);
}
$name = $randomName;



// добавление записи в код
$sql = "INSERT INTO `users` (`name`, `email`, `login`, `password`, `money`) VALUES ('$name', '$email', '$login', '$hash_pass', '$money')";
if ($conn->query($sql) === TRUE) {
    $_SESSION['good_message'] = 'Аккаунт добавлен';
}

$conn->close();
header('Location: /PBT_registration/index.php');
?>