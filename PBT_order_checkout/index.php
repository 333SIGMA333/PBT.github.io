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
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
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
                <h1 class="profile__booster_order-list-h1">Оформление заказа</h1>
                <div class="profile_booster_list-order-box-box-box">
                    <div class="profile_booster_list-order-box-box">
                        <div class="profile__booster-list-order-box">
                            <div class="profile__booster_list-order-content-box">
                                <div class="profile__right_order_img-box">
                                    <img src="./img/card-icon-98-73.png" alt="">
                                </div>
                                <div class="profile__booster_list-order_inf-box">
                                    <div class="profile__booster_list-order_title">Прокачка 60-70 TBC</div>
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
                                    <div class="profile__booster_list-order_title">Прокачка 60-70 TBC</div>
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
                                    <div class="profile__booster_list-order_title">Прокачка 60-70 TBC</div>
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
                                    <div class="profile__booster_list-order_title">Прокачка 60-70 TBC</div>
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
                                    <div class="profile__booster_list-order_title">Прокачка 60-70 TBC</div>
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
                                    <div class="profile__booster_list-order_title">Прокачка 60-70 TBC</div>
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
                                    <div class="profile__booster_list-order_title">Прокачка 60-70 TBC</div>
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
                                    <div class="profile__booster_list-order_title">Прокачка 60-70 TBC</div>
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
                    <div class="profile__booster_list-checkout-h2-content-box">
                        <h2 class="profile__booster_list-checkout-h2">Данные</h2>
                        <div class="profile__booster_list-checkout-email-box">
                            <div class="nickname__text_label-box">
                                <label for="nickname__text">Электронная почта</label>
                            </div> 
                            <input placeholder="Введите вашу почту" type="text" id="nickname__text">
                        </div>
                    </div>
                </div>
                <div class="profile__booster_list-checkout-total-box">
                    <span class="profile__booster_list-checkout-total">Итого:</span>
                    <span class="profile__booster_list-checkout-total-sum">1136$</span>
                </div>
                <h3 class="profile__booster_list-checkout-pay-h3">Оплата</h3>
                <div class="profile__booster_list-checkout-pay-box">
                    <div class="profile__booster_list-checkout-pay-content-box">
                        <div class="profile__booster_list-checkout-pay-card" id="profile__booster_list-checkout-pay-card1">
                            <img src="/PBT_order_checkout/img/visa.jpg" alt="" class="profile__booster_list-checkout-pay-img">
                        </div>
                        <div class="profile__booster_list-checkout-pay-card" id="profile__booster_list-checkout-pay-card2">
                            <img src="/PBT_order_checkout/img/apple.jpg" alt="" class="profile__booster_list-checkout-pay-img">
                        </div>
                    </div>
                    <div class="profile__booster_list-checkout-pay-content-box">
                        <div class="profile__booster_list-checkout-pay-card" id="profile__booster_list-checkout-pay-card3">
                            <img src="/PBT_order_checkout/img/help.jpg" alt="" class="profile__booster_list-checkout-pay-img">
                        </div>
                        <div class="profile__booster_list-checkout-pay-card" id="profile__booster_list-checkout-pay-card4">
                            <img src="/PBT_order_checkout/img/priamoy.jpg" alt="" class="profile__booster_list-checkout-pay-img">
                        </div>
                    </div>
                    <div class="profile__booster_list-checkout-pay-content-box">
                        <div class="profile__booster_list-checkout-pay-card" id="profile__booster_list-checkout-pay-card5">
                            <img src="/PBT_order_checkout/img/wmz.jpg" alt="" class="profile__booster_list-checkout-pay-img">
                        </div>
                        <div class="profile__booster_list-checkout-pay-card" id="profile__booster_list-checkout-pay-card6">
                            <img src="/PBT_order_checkout/img/payooneer.jpg" alt="" class="profile__booster_list-checkout-pay-img">
                        </div>
                    </div>
                    <div class="profile__booster_list-checkout-pay-content-box">
                        <div class="profile__booster_list-checkout-pay-card" id="profile__booster_list-checkout-pay-card7">
                            <img src="/PBT_order_checkout/img/bank.jpg" alt="" class="profile__booster_list-checkout-pay-img">
                        </div>
                    </div>

                    <div class="profile__booster_list-checkout-commission-box" id="profile__booster_list-checkout-commission-box">
                        <div class="profile__booster_list-checkout-commission1" id="profile__booster_list-checkout-commission1">Комиссия 10% (взимается при оплате)</div>
                        <div class="profile__booster_list-checkout-commission2" id="profile__booster_list-checkout-commission2">Включают в себя налоги и комиссию системы</div>
                    </div>
                </div>
                <button class="profile__booster_list-checkout-pay-btn">Оплатить</button>
        </section>
    </main>

    <script src="./js/main.js"></script>
</body>

</html>