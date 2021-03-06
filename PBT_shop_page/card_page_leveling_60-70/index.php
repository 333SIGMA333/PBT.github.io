<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Прокачка уровней TBC | PROBOOSTEAM</title>
    <!--стили текста-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <!--подключил файлы-->
    <link rel="stylesheet" href="/PBT_shop_page/card_page_leveling_60-70/css/style.css">
<?php if(isset($_COOKIE['user'])): ?>
    <link rel="stylesheet" href="/bd_scripts_php/profile.css">
<?php endif; ?>
</head>
<body>

<?php 
    if(isset($_COOKIE['user'])){
        include '../../bd_scripts_php/profileCard.php';
    }
    else{
        include '../../bd_scripts_php/profileOff.php';
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

    <section class="card__wrap_60-70leveling">
        <article class="shop__card">
            <div class="shop__card_img-box">
                <img src="/PBT_shop_page/card_page_leveling_60-70/img/card-icon.png" alt="" class="shop__card-img">
            </div>
            <div class="shop__card_body-box">
                <div class="shop__card_form-field">
                    <label for="form__field_select" class="shop__card_form-label">Варианты прокачки</label>
                    <div class="form__field_select">
                        <select class="select__input" id="select__input">
                            <option value="A" title="" name="card_option">Прокачать 60-70 (за 3-5 дней)</option>
                            <option value="B" title="" selected name="card_option">Прокачать 60-70  (за 5-7 дней)</option>
                            <option value="C" title="" name="card_option">Прокачать 58-70 (за 3-5 дней)</option>
                            <option value="D" title="" name="card_option">Прокачать 58-70 (за 5-7 дней)</option>
                            <option value="E" title="" name="card_option">Прокачать 1-58 (за 14 дней)</option>
                            <option value="F" title="" name="card_option">Прокачать 1-60 (за 14 дней)</option>
                            <option value="G" title="" name="card_option">По уровневая прокачка</option>
                        </select>
                    </div>
                </div>
                <div class="shop__card_desc">
                    <div class="desc__variants">

                        <div class="card__option-box" id="card__option-box1">
                            <div class="checkbox">
                                <input class="checkbox__input" type="checkbox" id="checkbox_1" value="1.1">
                                <label class="checkbox__label" for="checkbox_1">
                                    <span class="checkbox__label_text" id="checkbox__label_text1">PvP сервер</span>
                                </label>
                            </div>
                            <span class="card__option-text-after">+</span>
                            <span class="card__option-text-after" id="card__option-text-after1">10</span>
                            <span class="card__option-text-after" id="card__option-text-after11">%</span>
                        </div>
                            
                        <div class="card__option-box" id="card__option-box2">
                            <div class="checkbox">
                                <input class="checkbox__input" type="checkbox" id="checkbox_2" value="20">
                                <label class="checkbox__label" for="checkbox_2">
                                    <span class="checkbox__label_text" id="checkbox__label_text2">+Летающий маунт(60%)</span>
                                </label>
                            </div>
                            <span class="card__option-text-after">+</span>
                            <span class="card__option-text-after" id="card__option-text-after2">20</span>
                            <span class="card__option-text-after">$</span>
                        </div>

                        <div class="card__option-box" id="card__option-box3">
                            <div class="checkbox">
                                <input class="checkbox__input" type="checkbox" id="checkbox_3" value="60">
                                <label class="checkbox__label" for="checkbox_3">
                                    <span class="checkbox__label_text" id="checkbox__label_text3">+Летающий маунт(280%)</span>
                                </label>
                            </div>
                            <span class="card__option-text-after">+</span>
                            <span class="card__option-text-after" id="card__option-text-after3">60</span>
                            <span class="card__option-text-after">$</span>
                        </div>

                        <div class="card__option-box" id="card__option-box4">
                            <div class="checkbox">
                                <input class="checkbox__input" type="checkbox" id="checkbox_4" value="50">
                                <label class="checkbox__label" for="checkbox_4">
                                    <span class="checkbox__label_text" id="checkbox__label_text4">+Одна собирательная профа(1-375)</span>
                                </label>
                            </div>
                            <span class="card__option-text-after">+</span>
                            <span class="card__option-text-after" id="card__option-text-after4">50</span>
                            <span class="card__option-text-after">$</span>
                        </div>

                        <div class="card__option-box" id="card__option-box5">
                            <div class="checkbox">
                                <input class="checkbox__input" type="checkbox" id="checkbox_5" value="50">
                                <label class="checkbox__label" for="checkbox_5">
                                    <span class="checkbox__label_text" id="checkbox__label_text5">+Две собирательные профы(1-375)</span>
                                </label>
                            </div>
                            <span class="card__option-text-after">+</span>
                            <span class="card__option-text-after" id="card__option-text-after5">50</span>
                            <span class="card__option-text-after">$</span>
                        </div>

                        <div class="card__option-box" id="card__option-box6">
                            <div class="checkbox">
                                <input class="checkbox__input" type="checkbox" id="checkbox_6" value="80">
                                <label class="checkbox__label" for="checkbox_6">
                                    <span class="checkbox__label_text" id="checkbox__label_text6">+Кулинария(1-375)</span>
                                </label>
                            </div>
                            <span class="card__option-text-after">+</span>
                            <span class="card__option-text-after" id="card__option-text-after6">80</span>
                            <span class="card__option-text-after">$</span>
                        </div>

                        <div class="card__option-box" id="card__option-box7">
                            <div class="checkbox">
                                <input class="checkbox__input" type="checkbox" id="checkbox_7" value="80">
                                <label class="checkbox__label" for="checkbox_7">
                                    <span class="checkbox__label_text" id="checkbox__label_text7">+Рыбная ловля(1-375)</span>
                                </label>
                            </div>
                            <span class="card__option-text-after">+</span>
                            <span class="card__option-text-after" id="card__option-text-after7">80</span>
                            <span class="card__option-text-after">$</span>
                        </div>

                        <div class="card__option-box" id="card__option-box8">
                            <div class="checkbox">
                                <input class="checkbox__input" type="checkbox" id="checkbox_8" value="30">
                                <label class="checkbox__label" for="checkbox_8">
                                    <span class="checkbox__label_text" id="checkbox__label_text8">+Первая помощь(1-375)</span>
                                </label>
                            </div>
                            <span class="card__option-text-after">+</span>
                            <span class="card__option-text-after" id="card__option-text-after8">30</span>
                            <span class="card__option-text-after">$</span>
                        </div>

                        <div class="card__option-box" id="card__option-box9">
                            <div class="checkbox">
                                <input class="checkbox__input" type="checkbox" id="checkbox_9" value="270">
                                <label class="checkbox__label" for="checkbox_9">
                                    <span class="checkbox__label_text" id="checkbox__label_text9">+Открыть все героики</span>
                                </label>
                            </div>
                            <span class="card__option-text-after">+</span>
                            <span class="card__option-text-after" id="card__option-text-after9">270</span>
                            <span class="card__option-text-after">$</span>
                        </div>

                        <div class="card__option-box" id="card__option-box10">
                            <div class="checkbox">
                                <input class="checkbox__input" type="checkbox" id="checkbox_10" value="18">
                                <label class="checkbox__label" for="checkbox_10">
                                    <span class="checkbox__label_text" id="checkbox__label_text10">60-61</span>
                                </label>
                            </div>
                            <span class="card__option-text-after">+</span>
                            <span class="card__option-text-after" id="card__option-text-after10">18</span>
                            <span class="card__option-text-after">$</span>
                        </div>

                        <div class="card__option-box" id="card__option-box11">
                            <div class="checkbox">
                                <input class="checkbox__input" type="checkbox" id="checkbox_11" value="17">
                                <label class="checkbox__label" for="checkbox_11">
                                    <span class="checkbox__label_text" id="checkbox__label_text11">59-60</span>
                                </label>
                            </div>
                            <span class="card__option-text-after">+</span>
                            <span class="card__option-text-after" id="card__option-text-after11">17</span>
                            <span class="card__option-text-after">$</span>
                        </div>

                        <div class="card__option-box" id="card__option-box12">
                            <div class="checkbox">
                                <input class="checkbox__input" type="checkbox" id="checkbox_12" value="16">
                                <label class="checkbox__label" for="checkbox_12">
                                    <span class="checkbox__label_text" id="checkbox__label_text12">58-59</span>
                                </label>
                            </div>
                            <span class="card__option-text-after">+</span>
                            <span class="card__option-text-after" id="card__option-text-after12">16</span>
                            <span class="card__option-text-after">$</span>
                        </div>

                    </div>
                    <span class="desc__price" id="desc__price">240</span>
                    <span class="desc__price-bucks">$</span> 
                </div>
            </div>
            <div class="shop__card_footer-box">
                <button class="shop__card_footer-button">
                    <div class="shop__card_footer-button-box">
                        <span class="shop__card_footer-button-img-box">
                            <img class="shop__card_footer-button-img" src="/PBT_shop_page/card_page_leveling_60-70/img/cart-icon.svg" alt="">
                        </span>
                        <span class="shop__card_footer-button-text">В корзину</span>
                    </div>
                    
                </button>
            </div>
        </article>

        <article class="shop__desc">
            <div class="shop__desc_box">
                <div class="shop__desc_h1-box">
                    <h1 class="shop__desc_h1">
                        Прокачка 60-70 TBC
                    </h1>
                </div>
                <div class="shop__desc_h2-service-box">
                    <h2 class="shop__desc_h2-service">
                        Услуга включает:
                    </h2>
                </div>
                <div class="shop__desc_ul-service-box">
                    <ul class="service__ul">
                        <li class="service__box_li">Прокачаем вашего персонажа до 70 уровня!</li>
                        <li class="service__box_li">Персонаж будет одет в экипировку, которую выдают за выполнение квестовых заданий в WoW Burning Crusade Classic.</li>
                        <li class="service__box_li">Прокачка персонажа осуществляется исключительно руками, никаких ботов и автоматизированных программ!</li>
                        <li class="service__box_li">Проведение прокачки в оговоренный срок.</li>
                    </ul>
                </div>
                <div class="shop__desc_subtext-box">
                    <div class="shop__desc_subtext">🕓 Срок: В зависимости от выбранных опций(если у вас PvP сервер срок прокачки может увеличится на 2-5 дней)</div>
                </div>
                <div class="shop__desc_h3-sub-box">
                    <h3 class="shop__desc_h3-sub">💡 Дополнительное описание:</h3>
                </div>
                <div class="shop__desc_ul-sub-box">
                    <ul class="ul-sub">
                        <li class="sub__box_li">Предлагаем услугу для тех, кто не хочет тратить ни секунды, чтобы достичь 70-го уровня максимально быстро.</li>
                        <li class="sub__box_li">Наши сотрудники начнут прокачивать вашего персонажа в течение часа после оплаты услуги, максимально быстро и эффективно. </li>
                        <li class="sub__box_li">Мы можем качать персонажа как по квестам, так и по подземельям, в зависимости от Ваших предпочтений, но цена на услугу в этом случаи может измениться.</li>
                        <li class="sub__box_li">Желаемый метод прокачки Вы можете указать в пожеланиях.Возможна прокачка и с других уровней, к примеру 22 - 58,  45 - 70 и другие. Цена будет ниже. Свяжитесь с нами для уточнения деталей. </li>
                        <li class="sub__box_li">Также мы можем работать в удобное Вам время, что позволит Вам ходить в рейды, играть на БГ и жить полноценной игровой жизнью. Однако, сроки прокачки могут увеличиться.</li>
                    </ul>
                </div>
                <div class="shop__desc_h4-rules-box">
                    <h4 class="shop__desc_h4-rules">🔒 Правила и требования к аккаунту:</h4>
                </div>
                <div class="shop__desc_ul-rules-box">
                    <ul class="rules__ul">
                        <li class="rules__box_li">Не заходить на аккаунт во время буста, если не оговорено иное.</li>
                    </ul>
                </div>
            </div>
            <div class="shop__desc_button_box">
                <a href="/PBT_order_checkout/index.php" class="shop__desc_button_link">
                    <button class="shop__desc_button">
                        <img src="/PBT_shop_page/card_page_leveling_60-70/img/Transfer_long_left.svg" alt="" class="shop__desc_button-img">
                        <div class="shop__desc_button-text">Купить в 1 клик</div>
                    </button>
                </a>
            </div>
        </article>

        <article class="shop__data">
            <div class="shop__data_box">
                <div class="shop__data_title">Данные</div>

                <div class="shop__data_nickname-box">
                    <div class="nickname__text_label-box">
                        <label for="nickname__text">Никнейм персонажа</label>
                    </div> 
                    <input placeholder="Введите имя персонажа" type="text" id="nickname__text">
                </div> 

                <div class="shop__data_nickname-box">
                    <div class="nickname__text_label-box">
                        <label for="nickname__text">Класс персонажа</label>
                    </div> 
                    <input placeholder="Введите класс персонажа" type="text" id="nickname__text">
                </div>

                <div class="shop__data_nickname-box">
                    <div class="nickname__text_label-box">
                        <label for="nickname__text">Сервер персонажа</label>
                    </div> 
                    <input placeholder="Введите сервер персонажа" type="text" id="nickname__text">
                </div>

                <div class="shop__data_nickname-box">
                    <div class="nickname__text_label-box">
                        <label for="nickname__text">Логин</label>
                    </div> 
                    <input placeholder="Введите логин от Battle.net" type="text" id="nickname__text">
                </div>

                <div class="shop__data_nickname-box">
                    <div class="nickname__text_label-box">
                        <label for="nickname__text">Пароль</label>
                    </div> 
                    <input placeholder="Введите пароль от Battle.net" type="text" id="nickname__text">
                </div>

                <div class="shop__data_nickname-box">
                    <div class="nickname__text_label-box">
                        <label for="nickname__text">Страна VPN</label>
                    </div> 
                    <input placeholder="Введите свою страну" type="text" id="nickname__text">
                </div>

                <div class="shop__data_nickname-box">
                    <div class="nickname__text_label-box">
                        <label for="nickname__text">Данные для связи с вами</label>
                    </div> 
                    <input placeholder="Пример Дискорда: Booster#8689" type="text" id="nickname__text">
                </div>

                <div class="shop__data_nickname-box">
                    <div class="nickname__text_label-box">
                        <label for="nickname__text">Пожелания на время буста</label>
                    </div> 
                    <input placeholder="Пример: Не играть в 20:00" type="text" id="nickname__text">
                </div>

                <div class="shop__data_nickname-box">
                    <div class="nickname__text_label-box">
                        <label>Варианты подтверждения</label>
                    </div>
                    <div class="shop__data_select-box">
                        <select class="shop__data_select-input" id="shop__data_select-input">
                            <option value="A">Секретный код</option>
                            <option value="B">Подтверждение на телефон</option>
                            <option value="C">Подтверждение по почте</option>
                            <option value="D">Нет авторизации</option>
                        </select>
                    </div>
                </div>

                <div class="shop__data_secretcode-box" id="shop__data_secretcode-box">
                    <div class="nickname__text_label-box">
                        <label for="nickname__text">Секретный код</label>
                    </div> 
                    <input placeholder="Введите секретный код battle.net" type="text" id="nickname__text">
                </div>

                <div class="shop__data_telephone-box" id="shop__data_telephone-box">
                    <div class="nickname__text_label-box">
                        <label for="nickname__text">Подтверждение на телефон</label>
                    </div> 
                    <input placeholder="В какое время высылать" type="text" id="nickname__text">
                </div>

                <div class="shop__data_mail-box" id="shop__data_mail-box">
                    <div class="nickname__text_label-box">
                        <label for="nickname__text">Подтверждение по почте</label>
                    </div> 
                    <input placeholder="В какое время высылать" type="text" id="nickname__text">
                </div>
            </div>
        </article>
    </section>

    <script src="./js/main.js"></script>
</body>
</html>