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

    <nav class="shop__navigation">
        <ul class="shop__menu">
            <li class="shop__menu-item">
                <a href="#" class="shop__menu-item-link shop__menu-item-link1">Золото TBC</a>
                <a href="#" class="shop__menu-item-link-media-mini shop__menu-item-link1">Золото</a>
            </li>
            <hr class="shop__menu-line shop__menu-line1">
            <li class="shop__menu-item">
                <a href="/PBT_shop_page/index.php" class="shop__menu-item-link shop__menu-item-link2">Прокачка персонажа</a>
                <a href="/PBT_shop_page/index.php" class="shop__menu-item-link-media-mini shop__menu-item-link2">Прокачка</a>
            </li>
            <hr class="shop__menu-line shop__menu-line2">
            <li class="shop__menu-item">
                <a href="#" class="shop__menu-item-link shop__menu-item-link3">Маунты</a>
            </li>
            <hr class="shop__menu-line shop__menu-line3">
            <li class="shop__menu-item">
                <a href="#" class="shop__menu-item-link shop__menu-item-link4">Подземелья</a>
            </li>
            <hr class="shop__menu-line shop__menu-line4">
            <li class="shop__menu-item">
                <a href="#" class="shop__menu-item-link shop__menu-item-link5">PvP</a>
            </li>
            <hr class="shop__menu-line shop__menu-line5">
            <li class="shop__menu-item">
                <a href="#" class="shop__menu-item-link shop__menu-item-link6">Рейды</a>
            </li>
        </ul>
    </nav>

    <section class="shop__cards">
        <article class="shop__card shop__card1">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card_link-img-box">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>

        <article class="shop__card shop__card2">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>

        <article class="shop__card shop__card3">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>

        <article class="shop__card shop__card4">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>

        <article class="shop__card shop__card5">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>

        <article class="shop__card shop__card6">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>

        <article class="shop__card shop__card7">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>

        <article class="shop__card shop__card8">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>

        <article class="shop__card shop__card9">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>

        <article class="shop__card shop__card10">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>
        <article class="shop__card shop__card11">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>
        <article class="shop__card shop__card12">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>
        <article class="shop__card shop__card13">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>
        <article class="shop__card shop__card14">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>
        <article class="shop__card shop__card15">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>
        <article class="shop__card shop__card16">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>
        <article class="shop__card shop__card16">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>
        <article class="shop__card shop__card16">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>
        <article class="shop__card shop__card16">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>
        <article class="shop__card shop__card16">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>
        <article class="shop__card shop__card16">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>
        <article class="shop__card shop__card16">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>
        <article class="shop__card shop__card16">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>
        <article class="shop__card shop__card16">
            <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card-link">
                <div class="shop__card-link-img">
                    <img src="/PBT_shop_page/img/card-icon.jpg" alt="" class="shop__card-link-img"">
                </div>
            </a>
            <div class="shop__card-name">Прокачка 60-70 TBC</div>
            <div class="shop__card-subscription">⏳ Срок: 3-10 дней.</div>
            <hr class="shop__card-line shop__card-line1">
            <div class="shop__card-order-container">
                <div class="shop__card-price">45 $</div>
                <hr class="shop__card-line shop__card-line2">
                <a href="/PBT_shop_page/card_page_leveling_60-70/index.php" class="shop__card_order-button-link">
                    <div class="shop__card-order-button">Заказать</div>
                </a>
            </div>
        </article>
    </section>

    <script src="./js/main.js"></script>
</body>

</html>