<?php
session_start();


$nick = filter_var(stripslashes(trim($_POST['nick'])),FILTER_SANITIZE_STRING);

$discord = filter_var(stripslashes(trim($_POST['discord'])),FILTER_SANITIZE_STRING);
$telegram = filter_var(stripslashes(trim($_POST['telegram'])),FILTER_SANITIZE_STRING);
$whatsapp = filter_var(stripslashes(trim($_POST['whatsapp'])),FILTER_SANITIZE_STRING);
$skype = filter_var(stripslashes(trim($_POST['skype'])),FILTER_SANITIZE_STRING);

$userId = $_COOKIE['id'];



// Create connection -----------------------------------------
require "connect.php";
// Check connection ------------------------------------------
if ($conn->connect_error) {
    echo "<br>".'Ошибка соединения: '.$mysqli->connect_error;
    die("<br>"."Connection failed: " . $conn->connect_error);
}


// проверка на пустые поля данных
if ($nick=='') {
    $_SESSION['nick_clear'] = 'Строка никнейма пустая!';
    header('Location: /PBT_profile_buyer/index.php');
    exit();
}



// выгрузка аватарки в папку
$path = '../uploads/'.time().$_FILES['avatar']['name'];
if (!move_uploaded_file($_FILES['avatar']['tmp_name'],$path)){
    echo"ошибка загрузки файла";
}

// ../uploads/1650724935Zheka.jpeg




// Обновление записи в бд
$sql = "UPDATE `users` SET `name` = '$nick', `discord` = '$discord', `telegram` = '$telegram', `whatsapp` = '$whatsapp', `skype` = '$skype', `avatar` = '$path' WHERE `id` = '$userId'";
if ($conn->query($sql) === TRUE) {
    $resultData = $conn->query("SELECT * FROM `users` WHERE `id` = '$userId'"); // запрос на все данные
    $userData = $resultData->fetch_assoc(); // присвоены данные юзера из бд в массив user

    setcookie('user', $user['name'], 1, "/");
    setcookie('discord', $user['discord'], 1, "/");
    setcookie('telegram', $user['telegram'], 1, "/");
    setcookie('whatsapp', $user['whatsapp'], 1, "/");
    setcookie('skype', $user['skype'], 1, "/");
    setcookie('avatar', $user['avatar'], 1, "/");


    setcookie('user', $userData['name'], strtotime('+7 days'), "/");
    setcookie('discord', $userData['discord'], strtotime('+7 days'), "/");
    setcookie('telegram', $userData['telegram'], strtotime('+7 days'), "/");
    setcookie('whatsapp', $userData['whatsapp'], strtotime('+7 days'), "/");
    setcookie('skype', $userData['skype'], strtotime('+7 days'), "/");
    setcookie('avatar', $userData['avatar'], strtotime('+7 days'), "/");
}
else{
    echo "не выполнился";
}


$conn->close();
header('Location: /PBT_profile_buyer/index.php');
?>

<!-- 
    .cart{
        margin-left: 55px;
    }
    
    .navigation{
        margin-left: 115px;
    }

    //не запрос
    #header__cabinet_dropdown-menu{
    position: absolute;

    display: none;

    width: 90px;
    height: 60px;

    border: none;
    -webkit-box-shadow: rgba(0,0,0,0.22) 0 1px 4px;
    box-shadow: rgba(0,0,0,0.22) 0 1px 4px;
    background-color: #fff;

    right: 0;

    margin-right: 4px;
    margin-top: 12px;

    z-index: 1;

    font-weight: normal;
    font-size: 12px;
    line-height: 14px;
}

.header{
    position: relative;

    width: 1320px;
    margin-right: auto;
    margin-left: auto;
}


-->
