<?php 
    session_start(); 
?>

<?php if(isset($_COOKIE['id']) AND isset($_COOKIE['booster'])): ?>

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
<?php if(isset($_COOKIE['user'])): ?>
    <link rel="stylesheet" href="/bd_scripts_php/profile.css">
<?php endif; ?>
</head>

<body>

<?php
    include '../bd_scripts_php/profile.php';
?>

    <main class="profile__body">  
        <section class="profile__box">
            <div class="profile__left_content-box">
                <div class="profile__left_inf-box">
                    <img src="<?php 
                            if(isset($_COOKIE['avatar'])){
                                echo($_COOKIE['avatar']);
                            }else{
                                echo ("/PBT_profile_buyer/img/profile-img.svg");
                                } 
                            ?>" alt="" class="profile__left_img">
                    <div class="profile__left_text-box">
                        <div class="profile__left_nick"><?php 
                            if(isset($_COOKIE['user'])){
                                echo($_COOKIE['user']);
                            }else{
                                echo (" ");
                                } 
                            ?></div>
                        <div class="profile__left_money-box">
                            <div class="profile__left_money"><?=$_COOKIE['money']?>$</div>
                            <div class="profile__left_money-content-box">
                                <a href="#" class="profile__left_add-money-content-box">+ Пополнить</a>
                                <div class="profile__left_remove-money-prompt" id="profile__left_remove-money-prompt">
                                    ?
                                    <div class="profile__left__remove_prompt" id="profile__left__remove_prompt">
                                        💰 Бустеры - Комиссия на вывод 10%<br>
                                        💰 Руководители - Комиссия на вывод 5%
                                    </div>
                                </div>
                                <a href="#" class="profile__left_remove-money-content-box">
                                    <div class="profile__left_remove-money-content">- Снять</div>  
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/PBT_profile_booster/index.php">
                    <div class="profile__left_trans-box profile__left_trans-box1">
                        <div class="profile__left_trans_text">Профиль</div>
                    </div>
                </a>
                <a href="/PBT_profile_booster_orders/index.php">
                    <div class="profile__left_trans-box profile__left_trans-box2">
                        <div class="profile__left_trans_text">Мои заказы</div>
                        <div class="profile__left_trans_counter">0</div>
                    </div>
                </a>
                <a href="/PBT_profile_buyer/index.php">
                    <div class="profile__left_trans-box profile__left_trans-box3">
                        <div class="profile__left_trans_text">Аккаунт покупателя</div>
                    </div>
                </a>
                <a href="/PBT_profile_booster_order_list/index.php">
                    <div class="profile__left_trans-box profile__left_trans-box4">
                        <div class="profile__left_trans_text">Список заказов</div>
                        <div class="profile__left_trans_counter">0</div>
                    </div>
                </a>
                <a href="/bd_scripts_php/exit.php">
                    <div class="profile__left_trans-box profile__left_trans-box5">
                        <div class="profile__left_trans_text">Выйти</div>
                    </div>
                </a>
            </div>
            <div class="profile__right_content-box">
                <div class="profile__right_inf_box">
                    <h1 class="profile__right_h1">Мои заказы</h1>
                    <div class="profile__right_order-box">
                        <div class="profile__right_order-content-box">
                            <div id="myBtn2" class="profile__right_order_img-box">
                                <img src="./img/card-icon-98-73.png" alt="">
                            </div>
                            <div class="profile__right_order_inf-box">
                                <div class="profile__right_order_title">#235 Прокачка 60-70 TBC</div>
                                <div class="profile__right_order_subtitle">PvP сервер +Летающий маунт(60%)</div>
                                <div class="profile__right_order_status">Статус: <span class="red">выполняется</span></div>
                            </div>
                            <div class="profile__right_order_price-box">
                                <div class="profile__right_order_price">284$</div>
                            </div>
                        </div>
                    </div>
                    <div class="profile_right_order-btn-box">
                        <button class="profile__right_order-btn-pass">Сдать</button>
                        <!-- myBtn -->
                        <div class="profile__right_order-btn-prompt" id="profile__right_order-btn-prompt">?
                            <div class="profile__right_order-btn-promt-text" id="profile__right_order-btn-promt-text">
                                Скриншоты нужно грузить [⏳при заходе на аккаунт Клиента⏳] и [⏳при выходе с аккаунта клиента⏳] ежедневно ! <br>
                                На всех скриншотах должны быть видны открытые сумки, количество золота, ник Клиента, отслеживание того, что вы бустите.
                            </div>
                        </div>
                        <button id="myBtn" class="profile__right_order-btn-screen">Скриншоты</button>
                    </div>
                </div>
            </div>
            <!-- popup -->
            <div id="mypopup" class="profile__right_screenloader-popup-bg">
                <!-- popup-content -->
                <div class="profile__right_screenloader-popup-box">
                    <!-- close -->
                    <div id="popupClose" class="profile__right_screenloader-popup-exit-box">
                        <div class="left-screen-line-exit"></div>
                        <div class="right-screen-line-exit"></div>
                    </div>
                    <div class="profile__right_screenloader-popup-img-box">
                        <img src="./img/coolicon.svg" alt="" class="profile__right_screenloader-popup-img">
                        <div class="profile__right_screenloader-popup-screen-loader-box">
                            <input type="file" id="profile__right_screenloader-popup-screen-loader" accept=".jpg, .jpeg, .png">
                            <label for="file" class="profile__right_screenloader-popup-screen-loader-label">выбрать скриншот</label>
                        </div>
                    </div>
                    <button class="profile__right_screenloader-popup-upload">Загрузить скриншот</button>
                    <button class="profile__right_screenloader-popup-delete">Удалить скриншот</button>
                </div>
            </div>
            <!-- popup -->
            <div id="mypopup2" class="profile__right_order-popup-bg">
                <!-- popup-content -->
                <div class="profile__right_order-popup-box">
                    <div class="profile__right_order-popup-img-box">
                        <img src="./img/card-icon-98-73.png" alt="" class="profile__right_order-popup-img">
                    </div>
                    <!-- close -->
                    <div id="popupClose2" class="profile__right_order-popup-exit-box">
                        <div class="left-order-line-exit"></div>
                        <div class="right-order-line-exit"></div>
                    </div>
                    <h1 class="profile__right_order-popup-h1">Заказ#235 - Прокачка 60-70 TBC</h1>
                    <div class="profile__right_order-popup-text-box">
                        <div class="profile__right_order-popup-text-left-box">
                            <div class="profile__right_order-popup-text-content-box">
                                <div class="profile__right-order-popup-main-text">Логин</div>
                                <div class="profile__right-order-popup-off-text">goglik@gmail.com</div>
                            </div>
                            <div class="profile__right_order-popup-text-content-box">
                                <div class="profile__right-order-popup-main-text">Класс персонажа</div>
                                <div class="profile__right-order-popup-off-text">Маг</div>
                            </div>
                            <div class="profile__right_order-popup-text-content-box">
                                <div class="profile__right-order-popup-main-text">Пароль</div>
                                <div class="profile__right-order-popup-off-text">gogl234</div>
                            </div>
                            <div class="profile__right_order-popup-text-content-box">
                                <div class="profile__right-order-popup-main-text">Данные для связи с вами</div>
                                <div class="profile__right-order-popup-off-text">Дискорд Booster#8689</div>
                            </div>
                            <div class="profile__right_order-popup-text-content-box">
                                <div class="profile__right-order-popup-main-text">Cпособ авторизации в Battle.net</div>
                                <div class="profile__right-order-popup-off-text">Секретный код</div>
                            </div>
                        </div>
                        <div class="profile__right_order-popup-text-right-box">
                            <div class="profile__right_order-popup-text-content-box">
                                <div class="profile__right-order-popup-main-text">Никнейм персонажа</div>
                                <div class="profile__right-order-popup-off-text">Бустер1337</div>
                            </div>
                            <div class="profile__right_order-popup-text-content-box">
                                <div class="profile__right-order-popup-main-text">Сервер персонажа</div>
                                <div class="profile__right-order-popup-off-text">Пламегор</div>
                            </div>
                            <div class="profile__right_order-popup-text-content-box">
                                <div class="profile__right-order-popup-main-text">Страна VPN</div>
                                <div class="profile__right-order-popup-off-text">France</div>
                            </div>
                            <div class="profile__right_order-popup-text-content-box">
                                <div class="profile__right-order-popup-main-text">Пожелания на время буста</div>
                                <div class="profile__right-order-popup-off-text">Не играть в 20:00</div>
                            </div>
                            <div class="profile__right_order-popup-text-content-box">
                                <div class="profile__right-order-popup-main-text">Секретный код Battle.net</div>
                                <div class="profile__right-order-popup-off-text">Питомец: Китик</div>
                            </div>
                        </div>          
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="./js/main.js"></script>
</body>

</html>

<?php else:  header('Location: /PBT_shop_page/index.php');?>
<?php endif; ?>