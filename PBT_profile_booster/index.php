<?php 
    session_start(); 
?>

<?php if(isset($_COOKIE['user'])): ?>

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
</head>

<body>

<?php
    include '../bd_scripts_php/profile.php';
?>

    <main class="profile__body">  
        <section class="profile__box">
            <div class="profile__left_content-box">
                <div class="profile__left_inf-box">
                    <img src="/PBT_profile_buyer/img/profile-img.svg" alt="" class="profile__left_img">
                    <div class="profile__left_text-box">
                        <div class="profile__left_nick">ProBooster228</div>
                        <div class="profile__left_money-box">
                            <div class="profile__left_money">25$</div>
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
                <a href="#">
                    <div class="profile__left_trans-box profile__left_trans-box5">
                        <div class="profile__left_trans_text">Выйти</div>
                    </div>
                </a>
            </div>
            <div class="profile__right_content-box">
                <div class="profile__right_inf_box">
                    <h1 class="profile__right_h1">Профиль</h1>
                    <div class="profile__right_avatar-nick-box">
                        <div class="profile__right_avatar-content-box">
                            <div class="profile__right_avatar-img-box">
                                <img src="/PBT_profile_buyer/img/coolicon.svg" alt="" class="profile__right_avatar-img">
                                <div class="profile__right_avatar-upload-box">
                                    <input type="file" id="profile__right_avatar-upload" accept=".jpg, .jpeg, .png">
                                    <label for="file" class="profile__right_avatar-upload-label">Загрузить аватар</label>
                                </div>
                            </div>
                            <a href="#" class="profile__right_avatar-change-pass">Смена пароля</a>
                        </div>
                        <div class="profile__right_nick-content-box">
                            <div class="profile__right_nick-input-box">
                                <label for="text">Никнейм</label>
                                <input type="text" id="profile__right_nick-input1" placeholder="ProBooster228">
                            </div>
                            <div class="profile__right_mail-input-box">
                                <label for="email">Почта</label>
                                <input type="email" id="profile__right_nick-input2" placeholder="boss322@gmail.com" readonly>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile__right_contacts_box">
                    <h1 class="profile__right_contacts-h1">Мои контакты</h1>
                    <div class="profile__right_contacts-input-content-box">
                        <div class="profile__right_contacts-input-box">
                            <label for="text">Discord</label>
                            <input type="text" id="profile__right_contacts-input" placeholder="введите ваш дискорд">
                        </div>
                        <div class="profile__right_contacts-input-box">
                            <label for="text">Telegram</label>
                            <input type="text" id="profile__right_contacts-input" placeholder="введите ваш телеграм">
                        </div>
                        <div class="profile__right_contacts-input-box">
                            <label for="text">ВКонтакте</label>
                            <input type="text" id="profile__right_contacts-input" placeholder="введите ваш вк">
                        </div>
                    </div>
                </div>
                <button class="profile__right_btn">Сохранить изменения</button>
            </div>
        </section>
    </main>

    <script src="./js/main.js"></script>
</body>

</html>

<?php else:  header('Location: /PBT_shop_page/index.php');?>
<?php endif; ?>