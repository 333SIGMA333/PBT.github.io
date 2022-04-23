<?php 
    session_start(); 
?>

<?php if(isset($_COOKIE['id'])): ?>

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
                                echo ("/PBT_profile_buyer_orders/img/profile-img.svg");
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
                                <a href="#" class="profile__left_remove-money-content-box">- Снять</a>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="/PBT_profile_buyer/index.php">
                    <div class="profile__left_trans-box profile__left_trans-box1">
                        <div class="profile__left_trans_text">Профиль</div>
                    </div>
                </a>
                <a href="/PBT_profile_buyer_orders/index.php">
                    <div class="profile__left_trans-box profile__left_trans-box2">
                        <div class="profile__left_trans_text">Мои заказы</div>
                        <div class="profile__left_trans_counter">0</div>
                    </div>
                </a>
                <?php if(isset($_COOKIE['booster'])): ?>
                <a href="/PBT_profile_booster/index.php">
                    <div class="profile__left_trans-box">
                        <div class="profile__left_trans_text">Аккаунт бустера</div>
                    </div>
                </a>
                <?php endif; ?>
                <a href="/bd_scripts_php/exit.php">
                    <div class="profile__left_trans-box">
                        <div class="profile__left_trans_text">Выйти</div>
                    </div>
                </a>
            </div>
            <div class="profile__right_content-box">
                <div class="profile__right_inf_box">
                    <h1 class="profile__right_h1">Мои заказы</h1>
                    <div class="profile__right_order-box">
                        <div class="profile__right_order-content-box" id="profile__right_order-content-box1">
                            <div class="profile__right_order_img-box">
                                <img src="./img/card-icon-98-73.png" alt="">
                            </div>
                            <div class="profile__right_order_inf-box">
                                <div class="profile__right_order_title">#235 Прокачка 60-70 TBC</div>
                                <div class="profile__right_order_subtitle">PvP сервер +Летающий маунт(60%)</div>
                                <div class="profile__right_order_status">Статус: <span class="red" id="red">выполняется</span></div>
                            </div>
                            <div class="profile__right_order_price-box">
                                <div class="profile__right_order_price">284$</div>
                                <div class="profile__right_order_price_clear_box" id="profile__right_order_price_clear_box1">
                                    <div class="profile__right_order_price_clear_left"></div>
                                    <div class="profile__right_order_price_clear_right"></div>
                                </div>
                            </div>
                        </div>
                        <div class="profile__right_order-content-box" id="profile__right_order-content-box2">
                            <div class="profile__right_order_img-box">
                                <img src="./img/card-icon-98-73.png" alt="">
                            </div>
                            <div class="profile__right_order_inf-box" id="profile__right_order_inf-box2">
                                <div class="profile__right_order_title">#235 Прокачка 60-70 TBC</div>
                                <div class="profile__right_order_subtitle">PvP сервер +Летающий маунт(60%)</div>
                                <div class="profile__right_order_status" id="profile__right_order_status2">Статус: <span class="green" id="green">готово</span></div>
                            </div>
                            <div class="profile__right_order_price-box">
                                <div class="profile__right_order_price">284$</div>
                                <div class="profile__right_order_price_clear_box" id="profile__right_order_price_clear_box2">
                                    <div class="profile__right_order_price_clear_left"></div>
                                    <div class="profile__right_order_price_clear_right"></div>
                                </div>
                            </div>
                        </div>
                        <div class="profile__right_order-content-box" id="profile__right_order-content-box3">
                            <div class="profile__right_order_img-box">
                                <img src="./img/card-icon-98-73.png" alt="">
                            </div>
                            <div class="profile__right_order_inf-box">
                                <div class="profile__right_order_title">#235 Прокачка 60-70 TBC</div>
                                <div class="profile__right_order_subtitle">PvP сервер +Летающий маунт(60%)</div>
                                <div class="profile__right_order_status">Статус: <span class="red" id="red">выполняется</span></div>
                            </div>
                            <div class="profile__right_order_price-box">
                                <div class="profile__right_order_price">284$</div>
                                <div class="profile__right_order_price_clear_box" id="profile__right_order_price_clear_box3">
                                    <div class="profile__right_order_price_clear_left"></div>
                                    <div class="profile__right_order_price_clear_right"></div>
                                </div>
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