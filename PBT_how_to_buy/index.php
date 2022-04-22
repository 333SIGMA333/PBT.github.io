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
            <h1 class="guarantee__h1">КАК ЗАКАЗАТЬ У НАС УСЛУГУ</h1>
            <div class="guarantee__text_box">
                <h3 class="guarantee__text_h3 guarantee__text_h3-1">Порядок оплаты и начала работ:</h3>
                <ul class="guarantee__text_ul">
                    <li class="guarantee__text_li">Выбираете товар на странице “Магазин”, знакомитесь с условиями нажав на верхнюю часть карточки.</li>
                    <li class="guarantee__text_li">Кладете товар в корзину и оформляете заказ, с помощью соответствующих кнопок.</li>
                    <li class="guarantee__text_li">Оплатите товар и получите номера заказа (придет в письме на почту, указанную при оформлении заказа).</li>
                    <li class="guarantee__text_li">Получите заказанный товар или ожидайте его выполнения(прогресс можно отслеживать в вашем личном кабинете после регистрации).</li>
                </ul>
                <h3 class="guarantee__text_h3 guarantee__text_h3-2">Пошаговая оплата:</h3>
                <ul class="guarantee__text_ul">
                    <li class="guarantee__text_li">Регистрация нужна, если вы хотите получать бонусы и отслеживать ваш товар в удобном интерфейсе профиля.</li>
                    <li class="guarantee__text_li">На странице “Магазин” выбираем товар.</li>
                    <li class="guarantee__text_li">Внимательно прочтите описание товара или услуги, проставьте галочки в желаемых опциях, заполните данные, количество товаров (если есть). Затем нажмите кнопку "В корзину"</li>
                    <li class="guarantee__text_li">При нажатии кнопки, система предложит Вам оформить заказ, или продолжить выбор товаров. Оформить заказ можно через появившуюся форму вверху экрана.</li>
                    <li class="guarantee__text_li">Убедитесь в правильности заполненной корзины. Вы всегда можете вернуться на сайт, что бы продолжить выбор товаров и услуг.</li>
                    <li class="guarantee__text_li">Заполните все необходимые поля. Обязательное поле: Электронная почта, к ней прикрепляются все бонусы, на сайте лучше использовать одну почту. Остальные поля заполняются по необходимости.</li>
                    <li class="guarantee__text_li">Выбираете способ оплаты кликом по нужной иконке и переходите к оплате. В различных платежных системах есть свои обязательные данные, которые нужно вводить. </li>
                    <li class="guarantee__text_li">После совершения оплаты проверьте свою электронную почту, там будет письмо с номером заказа, вида 12345, и уведомлене об оплате.</li>
                    <li class="guarantee__text_li">Ждёте выполнения заказа(его можно отслеживать в личном кабинете после регистрации, а так же вам напишет менеджер на все контакты после выполнения) =)</li>
                </ul>
                <h3 class="guarantee__text_h3 guarantee__text_h3-3">На нашем сайте мы принимаем следующие платежные системы:</h3>
                <ul class="guarantee__text_ul">
                    <li class="guarantee__text_li">Банковские карты: Visa / Mastercard, любого из банков России и СНГ.</li>
                    <li class="guarantee__text_li">Электронными деньгми: Payoneer,  Webmoney.</li>
                    <li class="guarantee__text_li">Множеством других методов оплаты через сервис UNITPAY.</li>
                    <li class="guarantee__text_li">Прямые переводы на карточку СБЕРБАНКА.</li>
                    <li class="guarantee__text_li">Последние способ оплаты возможен только в ручном режиме - обратитесь за помощью к менеджерам в дискорде или других контактных платформах.</li>
                </ul>
                <h3 class="guarantee__text_h3 guarantee__text_h3-4">Возврат денег.</h3>
                <ul class="guarantee__text_ul">
                    <li class="guarantee__text_li">Вы всегда можете вернуть свои деньги в случаях оплаты по ошибке или в случае наступления непредвиденных обстоятельств.</li>
                    <li class="guarantee__text_li">Мы также вернем деньги, в случае, если Вы недовольны выполнением услуги по объективным причинам или в случае, если по какой-то причине выполнение услуги невозможно.</li>
                    <li class="guarantee__text_li">В тех случаях, когда к работе над заказом мы ещё не приступили, возможен возврат суммы в размере 100%.</li>
                    <li class="guarantee__text_li">В случае, если Вы хотите сделать возврат  до завершения сроков исполнения по причинам не зависящих от действий наших исполнителей, возврат осуществляется в размере 70% от суммы заказа(если не было сделано больше 50% прогресса).</li>
                    <li class="guarantee__text_li">Возврат денег производится в течении 72 часов.</li>
                    <li class="guarantee__text_li">Возврат осуществляется на кошельки платежных систем: webmoney, payoneer, а также на карточки банков: сбербанк, альфа банк и других банков.</li>
                    <li class="guarantee__text_li">Возврат средств осуществляется через связь с менеджерами в дискорде или в других контактных платформах.</li>
                </ul>
            </div>
            
            </div>
        </section>
    </main>

    <script src="./js/main.js"></script>
</body>

</html>