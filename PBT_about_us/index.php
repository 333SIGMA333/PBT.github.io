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

    <article class="about__nav">
        <div class="about__nav_box">
            <div class="about__nav_circle-box">
                <a href="#history" class="about__nav_circle about__nav_circle1"></a>
                <a href="#recruiting" class="about__nav_circle about__nav_circle2"></a>
                <a href="#about" class="about__nav_circle about__nav_circle3"></a>
            </div>
            <div class="about__nav_text-box">
                <a href="#history" class="about__nav_text about__nav_text1">История</a>
                <a href="#recruiting" class="about__nav_text about__nav_text2">Набор в команду</a>
                <a href="#about" class="about__nav_text about__nav_text3">Бустер месяца</a>
            </div>     
        </div>
    </article>

    <article class="about__body">
        <div class="about__history_box">
            <a name="history" class="about__history_h1_anchor">
                <h1 class="about__history_h1">ИСТОРИЯ</h1>
            </a>
            <div class="about__history_text">
                Наша команда <a href="/PBT_about_us/index.php" class="color__text_green">PROBOOSTEAM</a>  уже долгое время существует на рынке РМТ услуг. <br>
                Наша история начинается с оказания услуг по прокачке и продаже голды в 2018 году. <br>
                В 2019 году у нас настолько сильно увеличился объём продаж, что было принято решение создать сильную команду, которая бы справлялась с существующим объёмом работ. <br>
                Группы людей, которые занимались индивидуальным предоставлением услуг объединились в большую и дружную команду, которая и по сей день предоставляет качественные услуги РМТ. <br>
                Со временем поменялось большое количество людей, поменялась структура работы и теперь в нашей команде остались настоящие ветераны РМТ, а наша организация достигла высокой эффективности в выполнении нашем любимой работы. <br>
                На данный момент мы продолжаем развиваться, набирать новых людей в команду,расширяться, поэтому наша команда будет ещё долгое время оставаться в тонусе и продолжать предоставлять качественные услуги на рынке РМТ услуг.
                <p></p>Мы предоставляем <a href="/PBT_shop_page/index.php" class="color__text_green">большой спектр услуг</a>  в <span class="color__text_black">World of Warcraft: Burning Crusade, World of Warcraft: Shadowlands, World of Warcraft: SoM</span> . <br>
                У нас вы можете <a href="/PBT_shop_page/index.php" class="color__text_green">заказать услуги</a>:  по прокачка уровней, профф, драйвингу, поднятию рейтинга, фарму хонора, одеванию в пререйд, РЛьству, продаже голды, закрытию ключей, закрытию рейдов, фарму шмота и многому другому. 
                <p></p>У нас есть клиенты с которыми мы продолжаем работать с давних времён по сей день. Наша клиентская база с каждым днём расширяется и если вы бустер, то вы можете оставить на нашем сайте заявку в команду, работа для вас всегда найдётся.  
            </div>
        </div>

        <div class="about__recruiting_box">
            <a name="recruiting" class="about__recruiting_h1_anchor">
                <h1 class="about__recruiting_h1">НАБОР В КОМАНДУ</h1>
            </a>
            <div class="about__recruiting_text">
                Возможно у вас появилось желание <a href="https://forms.gle/7cdctu7ZmCxVcfFdA" class="color__text_green">попасть в нашу дружную команду</a> , если так, то у вас есть такая возможность ! Мы всё время ведём набор на руководящие и не руководящие роли в нашей команде. Чуть ниже вы можете увидеть какие свободные должности у нас есть. Чтобы оставить заявку в команду - <a href="https://forms.gle/7cdctu7ZmCxVcfFdA" class="color__text_green">нажмите на кружочек или зелёную надпись</a>  и заполните форму, в ближайшее время с вами свяжется наш вербовщик. 
            </div>
            <div class="about__recruiting_circle-box">
                <a href="https://forms.gle/7cdctu7ZmCxVcfFdA" class="about__recruiting_circle-link">
                    <div class="about__recruiting_circle">
                        <div class="about__recruiting_circle-text">Бустер</div> 
                    </div>
                </a>
                <a href="https://forms.gle/7cdctu7ZmCxVcfFdA" class="about__recruiting_circle-link">
                    <div class="about__recruiting_circle">
                        <div class="about__recruiting_circle-text">Менеджер</div> 
                    </div>
                </a>
                <a href="https://forms.gle/7cdctu7ZmCxVcfFdA" class="about__recruiting_circle-link">
                    <div class="about__recruiting_circle">
                        <div class="about__recruiting_circle-text">Вербовщик</div> 
                    </div>
                </a>
                <a href="https://forms.gle/7cdctu7ZmCxVcfFdA" class="about__recruiting_circle-link">
                    <div class="about__recruiting_circle">
                        <div class="about__recruiting_circle-text">WEB разработчик</div> 
                    </div>
                </a>
            </div>
        </div>

        <div class="about__boosterofthemonth_box">
            <div class="about__boosterofthemonth_content_box">
                <a name="about" class="about__boosterofthemonth_h1_anchor">
                    <h1 class="about__boosterofthemonth_h1">БУСТЕР МЕСЯЦА</h1>
                </a>
                <div class="about__boosterofthemonth_circle-img-box">
                    <img src="/PBT_about_us/img/Ilya-photo.jpg" alt="" class="about__boosterofthemonth_circle-img">
                </div>
                <div class="about__boosterofthemonth_circle_text">Илья <br> Менеджер</div>
            </div>
        </div>
    </article>


    <script src="./js/main.js"></script>
</body>

</html>