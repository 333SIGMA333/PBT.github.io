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
    if(isset($_COOKIE['user'])){
        include '../bd_scripts_php/profile.php';
    }
    else{
        include '../bd_scripts_php/profileOff.php';
    }
?>

    <main class="profile__body">  
        <section class="profile__box">
                <h1 class="profile__booster_order-list-h1">Ваш заказ</h1>
                <div class="profile_booster_list-order-box-box">
                    <div class="profile__booster-list-order-box">
                        <div class="profile__booster_list-order-content-box">
                            <div class="profile__right_order_img-box">
                                <img src="./img/card-icon-98-73.png" alt="">
                            </div>
                            <div class="profile__booster_list-order_inf-box">
                                <div class="profile__booster_list-order_title">#239 Прокачка 60-70 TBC</div>
                                <div class="profile__booster_list-order_subtitle">PvP сервер +Летающий маунт(60%)</div>
                            </div>
                            <div class="profile__booster_list-order_price-box">
                                <div class="profile__booster_list-order_price">284$</div>
                            </div>
                            <div class="profile__booster_list-order_trash-box">
                                <img src="./img/trash.svg" alt="" class="profile__booster_list-order_trash-img">
                            </div>
                        </div>
                    </div>
    
                    <div class="profile__booster-list-order-box">
                        <div class="profile__booster_list-order-content-box">
                            <div class="profile__right_order_img-box">
                                <img src="./img/card-icon-98-73.png" alt="">
                            </div>
                            <div class="profile__booster_list-order_inf-box">
                                <div class="profile__booster_list-order_title">#231 Прокачка 60-70 TBC</div>
                                <div class="profile__booster_list-order_subtitle">PvP сервер +Летающий маунт(60%)</div>
                            </div>
                            <div class="profile__booster_list-order_price-box">
                                <div class="profile__booster_list-order_price">284$</div>
                            </div>
                            <div class="profile__booster_list-order_trash-box">
                                <img src="./img/trash.svg" alt="" class="profile__booster_list-order_trash-img">
                            </div>
                        </div>
                    </div>
    
                    <div class="profile__booster-list-order-box">
                        <div class="profile__booster_list-order-content-box">
                            <div class="profile__right_order_img-box">
                                <img src="./img/card-icon-98-73.png" alt="">
                            </div>
                            <div class="profile__booster_list-order_inf-box">
                                <div class="profile__booster_list-order_title">#235 Прокачка 60-70 TBC</div>
                                <div class="profile__booster_list-order_subtitle">PvP сервер +Летающий маунт(60%)</div>
                            </div>
                            <div class="profile__booster_list-order_price-box">
                                <div class="profile__booster_list-order_price">284$</div>
                            </div>
                            <div class="profile__booster_list-order_trash-box">
                                <img src="./img/trash.svg" alt="" class="profile__booster_list-order_trash-img">
                            </div>
                        </div>
                    </div>
    
                    <div class="profile__booster-list-order-box">
                        <div class="profile__booster_list-order-content-box">
                            <div class="profile__right_order_img-box">
                                <img src="./img/card-icon-98-73.png" alt="">
                            </div>
                            <div class="profile__booster_list-order_inf-box">
                                <div class="profile__booster_list-order_title">#613 Прокачка 60-70 TBC</div>
                                <div class="profile__booster_list-order_subtitle">PvP сервер +Летающий маунт(60%)</div>
                            </div>
                            <div class="profile__booster_list-order_price-box">
                                <div class="profile__booster_list-order_price">284$</div>
                            </div>
                            <div class="profile__booster_list-order_trash-box">
                                <img src="./img/trash.svg" alt="" class="profile__booster_list-order_trash-img">
                            </div>
                        </div>
                    </div>
    
                    <div class="profile__booster-list-order-box">
                        <div class="profile__booster_list-order-content-box">
                            <div class="profile__right_order_img-box">
                                <img src="./img/card-icon-98-73.png" alt="">
                            </div>
                            <div class="profile__booster_list-order_inf-box">
                                <div class="profile__booster_list-order_title">#164 Прокачка 60-70 TBC</div>
                                <div class="profile__booster_list-order_subtitle">PvP сервер +Летающий маунт(60%)</div>
                            </div>
                            <div class="profile__booster_list-order_price-box">
                                <div class="profile__booster_list-order_price">284$</div>
                            </div>
                            <div class="profile__booster_list-order_trash-box">
                                <img src="./img/trash.svg" alt="" class="profile__booster_list-order_trash-img">
                            </div>
                        </div>
                    </div>

                    <div class="profile__booster-list-order-box">
                        <div class="profile__booster_list-order-content-box">
                            <div class="profile__right_order_img-box">
                                <img src="./img/card-icon-98-73.png" alt="">
                            </div>
                            <div class="profile__booster_list-order_inf-box">
                                <div class="profile__booster_list-order_title">#253 Прокачка 60-70 TBC</div>
                                <div class="profile__booster_list-order_subtitle">PvP сервер +Летающий маунт(60%)</div>
                            </div>
                            <div class="profile__booster_list-order_price-box">
                                <div class="profile__booster_list-order_price">284$</div>
                            </div>
                            <div class="profile__booster_list-order_trash-box">
                                <img src="./img/trash.svg" alt="" class="profile__booster_list-order_trash-img">
                            </div>
                        </div>
                    </div>

                    <div class="profile__booster-list-order-box">
                        <div class="profile__booster_list-order-content-box">
                            <div class="profile__right_order_img-box">
                                <img src="./img/card-icon-98-73.png" alt="">
                            </div>
                            <div class="profile__booster_list-order_inf-box">
                                <div class="profile__booster_list-order_title">#125 Прокачка 60-70 TBC</div>
                                <div class="profile__booster_list-order_subtitle">PvP сервер +Летающий маунт(60%)</div>
                            </div>
                            <div class="profile__booster_list-order_price-box">
                                <div class="profile__booster_list-order_price">284$</div>
                            </div>
                            <div class="profile__booster_list-order_trash-box">
                                <img src="./img/trash.svg" alt="" class="profile__booster_list-order_trash-img">
                            </div>
                        </div>
                    </div>

                    <div class="profile__booster-list-order-box">
                        <div class="profile__booster_list-order-content-box">
                            <div class="profile__right_order_img-box">
                                <img src="./img/card-icon-98-73.png" alt="">
                            </div>
                            <div class="profile__booster_list-order_inf-box">
                                <div class="profile__booster_list-order_title">#245 Прокачка 60-70 TBC</div>
                                <div class="profile__booster_list-order_subtitle">PvP сервер +Летающий маунт(60%)</div>
                            </div>
                            <div class="profile__booster_list-order_price-box">
                                <div class="profile__booster_list-order_price">284$</div>
                            </div>
                            <div class="profile__booster_list-order_trash-box">
                                <img src="./img/trash.svg" alt="" class="profile__booster_list-order_trash-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile__booster_list-order-btn-box">
                    <a href="/PBT_shop_page/index.php"><button class="profile__booster_list-order-next-buy">Продолжить покупки</button></a>
                    <a href="/PBT_order_checkout/index.php"><button class="profile__booster_list-order-checkout-buy">Оформить заказ</button></a>
                </div>
        </section>
    </main>

    <script src="./js/main.js"></script>
</body>

</html>