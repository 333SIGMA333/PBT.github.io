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