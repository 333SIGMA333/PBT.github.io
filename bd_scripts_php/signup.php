<?php

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
$randomName = substr(str_shuffle($permitted_chars), 0, 10);


$email = filter_var(stripslashes(trim($_POST['email'])),FILTER_SANITIZE_STRING);
$login = filter_var(stripslashes(trim($_POST['login'])),FILTER_SANITIZE_STRING);
$pass = filter_var(stripslashes(trim($_POST['pass'])),FILTER_SANITIZE_STRING);
$money = '0';


// проверка на пустые поля данных
if ($email=='' OR $pass=='' OR $login=='') {
    if ($email=='') {
       echo "<font color='red'>Заполните почту</font><br/>";
    }

    if ($pass=='') {
        echo "<font color='red'>Заполните пароль</font><br/>";
    }

    if ($login=='') {
        echo "<font color='red'>Заполните логин</font><br/>";
    }

    echo "<br/><a href='javascript:self.history.back();'>Назад</a>";
    exit();
}



// проверка на длину
if (strlen($email) > 30 OR strlen($pass) > 32 OR strlen($login) > 32){
    if (strlen($email) > 30) {
       echo "<font color='red'>Почта слишком длинная !</font><br/>";
       exit();
    }

    if (strlen($pass) > 32) {
        echo "<font color='red'>Пароль слишком длинный !</font><br/>";
        exit();
    }

    if (strlen($login) > 32) {
        echo "<font color='red'>Логин слишком длинный</font><br/>";
        exit();
    }
    echo "<br/><a href='javascript:self.history.back();'>Назад</a>";
    exit();
}



// создание Хэша
$pass = md5($pass."fasf12c");



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
    echo "<br>"."Такого email ещё нет в бд !"; 

} else{ 
    echo "<br>"."Такая почта уже зарегистрирована !"."<br>"."Измените почту !";
    die;
}



// проверка на уникальность зарандомленного имени
$sql = "SELECT name FROM users WHERE name = '$randomName'";
$result = $conn->query($sql);
while(mysqli_num_rows($result)==1) {
    echo "<br>"."Такое имя уже существует в бд !";
    $randomName = substr(str_shuffle($permitted_chars), 0, 10);
    $name = $randomName;
    
    $sql = "SELECT name FROM users WHERE name = '$randomName'";
    $result = $conn->query($sql);
}
echo "<br>"."Такого имени ещё нет в бд !"; 
$name = $randomName;



// добавление записи в код
$sql = "INSERT INTO `users` (`name`, `email`, `login`, `password`, `money`) VALUES ('$name', '$email', '$login', '$pass', '$money')";
if ($conn->query($sql) === TRUE) {
    echo '<br>'.'Аккаунт добавлен в бд';
} else {
    echo "Ошибка: добавления данных в бд " . $sql . "<br>" . $conn->error;
}

$conn->close();
header('Location: /PBT_autorization/index.html');
?>