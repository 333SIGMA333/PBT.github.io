<?php
    session_start();
?>


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

    <header class="header">

        <container class="wrap">
            <div class="logo">
                <img src="/PBT_shop_page/img/logo.png" alt="" class="logo__icon">
                <div class="logo__text">PROBOOSTEAM</div>
            </div>

            <nav class="navigation">
                <ul class="menu__list">
                    <li class="menu__item1 menu__item">
                        <a href="/PBT_shop_page/index.html" class="menu__link1 menu__link">Магазин</a>
                    </li>
                    <li class="menu__item2 menu__item">
                        <a href="/PBT_about_us/index.html" class="menu__link2 menu__link">О нас</a>
                    </li>
                    <li class="menu__item3 menu__item">
                        <a href="/PBT_reviews/index.html" class="menu__link3 menu__link">Отзывы</a>
                    </li>
                    <li class="menu__item4 menu__item">
                        <a href="/PBT_contacts/index.html" class="menu__link4 menu__link">Контакты</a>
                    </li>
                    <li class="menu__item5 menu__item">
                        <a href="/PBT_ guarantee/index.html" class="menu__link5 menu__link">Гарантии</a>
                    </li>
                    <li class="menu__item6 menu__item">
                        <a href="/PBT_how_to_buy/index.html" class="menu__link6 menu__link">Как купить</a>
                    </li>
                </ul>
            </nav>

            <a href="/PBT_cart/index.html" class="cart">
                <div class="cart__circle">
                    <div class="cart__circle-text">1</div>
                </div>
                <img src="/PBT_shop_page/img/cart-icon.svg" alt="" class="cart__icon">
                <div class="cart__text">Корзина</div>
            </a>

            <a href="#" class="language">
                <img src="/PBT_shop_page/img/ru.jpg" alt="" class="language__menu_img-ru">
                <div class="language__text">Язык</div>
            </a>

            <div class="cabinet">
                <a href="#" class="cabinet__link" id="cabinet__link">
                    <div class="cabinet__text" id="cabinet__text">Личный кабинет</div>
                    <div class="cabinet__triangl"></div>
                </a>
            </div>
        </container>
        <!-- выпадающее меню -->
        <ul id="header__cabinet_dropdown-menu">
            <li>
                <a href="/PBT_autorization/index.html" class="header__cabinet_enter">Войти</a>
            </li>
            <li>
                <a href="/PBT_registration/index.html" class="header__cabinet_registrartion">Регистрация</a>
            </li>
            <li>
                <a href="#" class="header__cabinet_language">
                    <div class="language__cabinet_text">Язык</div>
                    <img src="/PBT_shop_page/img/ru.jpg" alt="" class="language__cabinet_img-ru">
                </a>
            </li>
        </ul>

        <!-- палочка -->
        <hr class="header__line">

    </header>

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