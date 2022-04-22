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
    
    <main class="registration__body">  
        <section class="registration__box">
            <form action="/bd_scripts_php/signup.php" method="POST" class="registration__content_box">
                <h1 class="registration__h1">Регистрация</h1>
                <input placeholder="Почта" type="text" name="email" id="registration__input">
                <input placeholder="Логин" type="text" name="login" id="registration__input">
                <input placeholder="Пароль" type="text" name="pass" id="registration__input">
                <div class="registration__checkbox">
                    <label class="checkbox__label" for="checkbox_1">
                        <img src="./img/tick-icon.svg" alt="" id="checkbox__label_img">
                        <input class="checkbox__input" type="checkbox" id="checkbox_1" onchange="checkbox_tick()">
                        <span class="checkbox__label_text1">Да, я хотел бы получать эксклюзивные</span>
                        <span class="checkbox__label_text2">предложения по электронной почте.</span>
                    </label>
                </div>
                <input type="submit" value="Зарегистрироваться" class="registration__btn">
                    <?php 
                        //пустые поля вылезает ошибка

                        if(isset($_SESSION['bad_clear_email_message'])) {
                            echo '<div class="registration__message">'.$_SESSION['bad_clear_email_message'].'</div>';
                            echo '<style>.registration__message{border: 2px dashed red;}</style>';
                            echo '<style>.registration__box{height: 610px;}</style>';
                        }
                        unset($_SESSION['bad_clear_email_message']);

                        if(isset($_SESSION['bad_clear_pass_message'])) {
                            echo '<div class="registration__message">'.$_SESSION['bad_clear_pass_message'].'</div>';
                            echo '<style>.registration__message{border: 2px dashed red;}</style>';
                            echo '<style>.registration__box{height: 610px;}</style>';
                        }
                        unset($_SESSION['bad_clear_pass_message']);

                        if(isset($_SESSION['bad_clear_login_message'])) {
                            echo '<div class="registration__message">'.$_SESSION['bad_clear_login_message'].'</div>';
                            echo '<style>.registration__message{border: 2px dashed red;}</style>';
                            echo '<style>.registration__box{height: 610px;}</style>';
                        }
                        unset($_SESSION['bad_clear_login_message']);


                        //длинные строки вылезает ошибка


                        if(isset($_SESSION['bad_length_email_message'])) {
                            echo '<div class="registration__message">'.$_SESSION['bad_length_email_message'].'</div>';
                            echo '<style>.registration__message{border: 2px dashed red;}</style>';
                            echo '<style>.registration__box{height: 550px;}</style>';
                        }
                        unset($_SESSION['bad_length_email_message']);                        

                        if(isset($_SESSION['bad_length_pass_message'])) {
                            echo '<div class="registration__message">'.$_SESSION['bad_length_pass_message'].'</div>';
                            echo '<style>.registration__message{border: 2px dashed red;}</style>';
                            echo '<style>.registration__box{height: 550px;}</style>';
                        }
                        unset($_SESSION['bad_length_pass_message']);

                        if(isset($_SESSION['bad_length_login_message'])) {
                            echo '<div class="registration__message">'.$_SESSION['bad_length_login_message'].'</div>';
                            echo '<style>.registration__message{border: 2px dashed red;}</style>';
                            echo '<style>.registration__box{height: 550px;}</style>';
                        }
                        unset($_SESSION['bad_length_login_message']);


                        //похожая почта - логин вылезает ошибка
                        

                        if(isset($_SESSION['bad_email_message'])) {
                            echo '<div class="registration__message">'.$_SESSION['bad_email_message'].'</div>';
                            echo '<style>.registration__message{border: 2px dashed red;}</style>';
                        }
                        unset($_SESSION['bad_email_message']);

                        if(isset($_SESSION['bad_login_message'])) {
                            echo '<style>.registration__message{border: 2px dashed red;}</style>';
                            echo '<div class="registration__message">'.$_SESSION['bad_login_message'].'</div>';
                        }
                        unset($_SESSION['bad_login_message']);


                        //добавлен аккаунт


                        if(isset($_SESSION['good_message'])) {
                            echo '<div class="registration__message">'.$_SESSION['good_message'].'</div>';
                        }
                        unset($_SESSION['good_message']);
                    ?>
            </form>
        </section>
    </main>

    <script src="./js/main.js"></script>
</body>

</html>


<?php else:  header('Location: /PBT_profile_buyer/index.html');?>
<?php endif; ?>