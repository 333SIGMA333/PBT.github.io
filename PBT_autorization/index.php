<?php
    session_start();
?>

<?php if(empty($_COOKIE['user'])): ?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Помощь в онлайн-играх от PROBOOSTEAM</title>
    <!--стили текста-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!--подключил файлы-->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

<?php 
    include '../bd_scripts_php/profileOff.php';
?>

    <main class="autorization__body">  
        <section class="autorization__box">
            <div class="autorization__content_box">
            <form action="/bd_scripts_php/login.php" method="POST">
                <h1 class="autorization__h1">Вход</h1>
                <input placeholder="Почта" type="text" name="email" id="autorization__input">
                <input placeholder="Логин" type="text" name="login" id="autorization__input">
                <input placeholder="Пароль" type="text" name="pass" id="autorization__input">
                <?php
                    // подсветка инпутов красным в случае неправильного ввода
                    if(isset($_SESSION['bad_autorization'])) {
                        echo '<style>#autorization__input{border: 2px solid rgb(255, 0, 0);}</style>';
                    }
                    unset($_SESSION['bad_autorization']);
                ?>
                <button type="submit" class="autorization__btn1">Войти</button>
            </form>
            <a href="/PBT_registration/index.php"><button class="autorization__btn2">Зарегистрироваться</button></a>
            </div>
        </section>
    </main>

    <script src="./js/main.js"></script>
</body>

</html>


<?php else:  header('Location: /PBT_profile_buyer/index.html');?>
<?php endif; ?>