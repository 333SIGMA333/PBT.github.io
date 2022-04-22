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

    <main class="guarantee__body">
        <section class="guarantee__box">
            <h1 class="guarantee__h1">ПОЧЕМУ НАМ МОЖНО ДОВЕРЯТЬ ?</h1>
            <div class="guarantee__text_box">
                <div class="guarantee__text_actual">
                <a href="/PBT_about_us/index.php" class="guarantee__h1_link"><span class="color__green">PROBOOSTEAM</span></a> предоставляет актуальные и нужные услуги уже более 3 лет. <br>
                    Мы известны как хорошие и добросовестные исполнители. <br>
                    За время работы нашим сервисом воспользовались сотни людей ! <br>
                    За время нашей работы, мы выполнили больше 1000 заказов различной сложности ! <br>
                    В нашей команде больше 50 человек. <br>
                    Мы реальны, с нами можно взаимодействовать, общаться, встретиться ! 
                </div>
                <h2 class="guarantee__text_h2">Предоставляем следующие гарантии:</h2>
                <h3 class="guarantee__text_h3 guarantee__text_h3-1">Лучшее обслуживание!</h3>
                <ul class="guarantee__text_ul">
                    <li class="guarantee__text_li">Работаем с 09:00 до 02:00 по Москве каждый день!</li>
                    <li class="guarantee__text_li">Работаем быстро! Моментальная доставка расходников, прокачка аккаунта - всегда в срок!</li>
                    <li class="guarantee__text_li">Быстро принимаем заказ и выполняем работы по нему.</li>
                    <li class="guarantee__text_li">Отзывы наших клиентов.</li>
                </ul>
                <h3 class="guarantee__text_h3 guarantee__text_h3-2">Безопасность учетной записи.</h3>
                <ul class="guarantee__text_ul">
                    <li class="guarantee__text_li">За время нашей работы, а на данный момент наш стаж как игроков - более 14 лет, мы разработали методы и освоили процессы, которые делают прокачку аккаунта максимально быстрой и эффективной.</li>
                    <li class="guarantee__text_li">Использование VPN страны и города Вашего проживания, игра в "ваше" время, стабильное соединение, конфиденцильность (в игре не отвечаем) и другие методы - как пример.</li>
                    <li class="guarantee__text_li">При соблюдении всех мер безопасности, Вы практически полностью защищены от санкций со стороны администрации.</li>
                </ul>
                <h3 class="guarantee__text_h3 guarantee__text_h3-3">Мы никогда не используем:</h3>
                <ul class="guarantee__text_ul">
                    <li class="guarantee__text_li">Ботов или другие скрипты, автоматизирующие игровой процесс.</li>
                    <li class="guarantee__text_li">Читы, баги и уязвимости игры, за которые можно получить бан или другие санкции.</li>
                    <li class="guarantee__text_li">Нечестные и неспортивные приёмы, которые ведут к неприятным последствиям.</li>
                    <li class="guarantee__text_li">Добытую нечестным путем игровую валюту.</li>
                    <li class="guarantee__text_li">Персональные данные для всего, не связанного с выполнением заказа.</li>
                    <li class="guarantee__text_li">Ваши контакты для рассылки спама и других нежелательных предложений.</li>
                </ul>
                <h3 class="guarantee__text_h3 guarantee__text_h3-4">Мы всегда используем:</h3>
                <ul class="guarantee__text_ul">
                    <li class="guarantee__text_li">Профессиональных игроков и мастеров своего дела для решения задач и выполнения заказов</li>
                    <li class="guarantee__text_li">Защищенные VPN соединения и протоколы шифрования для маскировки работ и защиты Ваших персональных данных.</li>
                    <li class="guarantee__text_li">Честные и эффективные способы достижения результатов.</li>
                </ul>
                <h3 class="guarantee__text_h3 guarantee__text_h3-5">Возврат денег.</h3>
                <ul class="guarantee__text_ul">
                    <li class="guarantee__text_li">Вы всегда можете вернуть свои деньги в случаях оплаты по ошибке, несогласия с условиями или непредвиденных обстоятельств.</li>
                    <li class="guarantee__text_li">Мы также вернем деньги, в случае, если Вы недовольны выполнением услуги по объективным причинам или в случае, если по какой-то причине выполнение услуги невозможно.</li>
                    <li class="guarantee__text_li">В случае, если Вы хотите сделать возврат  до завершения сроков исполнения по причинам не зависящих от действий наших исполнителей, возврат осуществляется в размере 70%  от  суммы заказа(если не было сделано больше 50% прогресса). </li>
                    <li class="guarantee__text_li">Возврат денег Вы можете потребовать отправив письмо на почту 333yevgeniy333@gmail.com.</li>
                    <li class="guarantee__text_li">Всегда идем на встречу клиентам.</li>
                </ul>
                <h3 class="guarantee__text_h3 guarantee__text_h3-6">Тысячи рекомендаций.</h3>
                <ul class="guarantee__text_ul">
                    <li class="guarantee__text_li">Наша клиентская база уже насчитывает сотни довольных игроков, а количество заказов перевалило за 1000. Эти показатели постоянно растут.</li>
                    <li class="guarantee__text_li">Убедитесь сами в разделе «Отзывы» - где мы собираем обратную связь от наших клиентов.</li>
                    <li class="guarantee__text_li">Отзывы мы собираем через сайт TRUSTPILOT, один из ведущих отзовиков в мире.</li>
                    <li class="guarantee__text_li">У нас много сотрудничеств с другими командами, магазинами, форумами.</li>
                </ul>
                <a href="/PBT_contacts/index.php" class="guarantee__text_footer-link"><div class="guarantee__text_footer">Любые вас интересующие доказательства или вопросы вы можете запросить у нас в дискорде или любом другом нашем контактном ресурсе. В ближайшее время с вами свяжутся наши менеджеры.</div></a>
            </div>
            
            </div>
        </section>
    </main>

    <script src="./js/main.js"></script>
</body>

</html>