<header class="header">

        <container class="wrap">
            <div class="logo">
                <img src="/PBT_shop_page/img/logo.png" alt="" class="logo__icon">
                <div class="logo__text">PROBOOSTEAM</div>
            </div>

            <nav class="navigation">
                <ul class="menu__list">
                    <li class="menu__item1 menu__item">
                        <a href="/PBT_shop_page/index.php" class="menu__link1 menu__link">Магазин</a>
                    </li>
                    <li class="menu__item2 menu__item">
                        <a href="/PBT_about_us/index.php" class="menu__link2 menu__link">О нас</a>
                    </li>
                    <li class="menu__item3 menu__item">
                        <a href="/PBT_reviews/index.php" class="menu__link3 menu__link">Отзывы</a>
                    </li>
                    <li class="menu__item4 menu__item">
                        <a href="/PBT_contacts/index.php" class="menu__link4 menu__link">Контакты</a>
                    </li>
                    <li class="menu__item5 menu__item">
                        <a href="/PBT_guarantee/index.php" class="menu__link5 menu__link">Гарантии</a>
                    </li>
                    <li class="menu__item6 menu__item">
                        <a href="/PBT_how_to_buy/index.php" class="menu__link6 menu__link">Как купить</a>
                    </li>
                </ul>
            </nav>

            <a href="/PBT_cart/index.php" class="cart">
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
                    <div class="cabinet__circle_img-box">
                        <img src="<?php 
                            if(isset($_COOKIE['avatar'])){
                                echo('../'.$_COOKIE['avatar']);
                            }else{
                                echo ("/PBT_profile_buyer/img/profile-img.svg");
                                } 
                            ?>" alt="" class="cabinet__circle_img">
                    </div>
                    <div class="cabinet__nick_money-box">
                        <div class="cabinet__nick" id="cabinet__text"><?php 
                            if(isset($_COOKIE['user'])){
                                echo($_COOKIE['user']);
                            }else{
                                echo (" ");
                                } 
                            ?></div>
                        <div class="cabinet__money"><?=$_COOKIE['money']?>$</div>
                    </div>
                    <div class="cabinet__triangl"></div>
                </a>
            </div>
        </container>
        <!-- выпадающее меню -->
        <ul id="header__cabinet_dropdown-menu">
            <li>
                <a href="/PBT_profile_buyer/index.php" class="header__cabinet_profile">Профиль</a>
            </li>
            <li>
                <a href="/PBT_profile_buyer_orders/index.php" class="header__cabinet_orders">Мои заказы</a>
            </li>
            <li>
                <a href="#" class="header__cabinet_language">
                    <div class="language__cabinet_text">Язык</div>
                    <img src="/PBT_shop_page/img/ru.jpg" alt="" class="language__cabinet_img-ru">
                </a>
            </li>
            <li>
                <a href="#" class="header__cabinet_admin">Админка</a>
            </li>
            <li>
                <a href="/bd_scripts_php/exit.php" class="header__cabinet_exit">Выйти</a>
            </li>
            
        </ul>

        <!-- палочка -->
        <hr class="header__line">

</header>