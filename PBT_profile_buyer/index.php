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
            <form action="../bd_scripts_php/profileFunc.php" method="POST" class="profile__right_content-box" enctype="multipart/form-data">
                <div class="profile__right_inf_box">
                    <h1 class="profile__right_h1">Профиль</h1>
                    <div class="profile__right_avatar-nick-box">
                        <div class="profile__right_avatar-content-box">
                            <div class="profile__right_avatar-img-box">
                                <img src="<?php 
                            if(isset($_COOKIE['avatar'])){
                                echo($_COOKIE['avatar']);
                            }else{
                                echo ("/PBT_profile_buyer/img/coolicon.svg");
                                } 
                            ?>" alt="" class="profile__right_avatar-img">
                                <div class="profile__right_avatar-upload-box">
                                    <input type="file" id="profile__right_avatar-upload" accept=".jpg, .jpeg, .png" name="avatar" onchange="donwload(this)">
                                    <label for="file" class="profile__right_avatar-upload-label">Загрузить аватар</label>
                                </div>
                            </div>
                            <a href="#" class="profile__right_avatar-change-pass">Смена пароля</a>
                        </div>
                        <div class="profile__right_nick-content-box">
                            <div class="profile__right_nick-input-box">
                                <label for="text">Никнейм</label>
                                <input type="text" id="profile__right_nick-input1" placeholder="<?php 
                        if(isset($_SESSION['nick_clear'])) {
                            echo ($_SESSION['nick_clear']);
                        }
                        else{
                            if(isset($_COOKIE['user'])){
                                echo($_COOKIE['user']);
                            }else{
                                echo ("введите ваш никнейм");
                                } 
                        }
                        unset($_SESSION['nick_clear']);
                        ?>" name="nick">
                            </div>
                            <div class="profile__right_mail-input-box">
                                <label for="email">Почта</label>
                                <input type="email" id="profile__right_nick-input2" placeholder="<?=$_COOKIE['email']?>" readonly>    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="profile__right_contacts_box">
                    <h1 class="profile__right_contacts-h1">Мои контакты</h1>
                    <div class="profile__right_contacts-input-content-box">
                        <div class="profile__right_contacts-input-box">
                            <label for="text">Discord</label>
                            <input type="text" id="profile__right_contacts-input" placeholder="<?php 
                            if(isset($_COOKIE['discord'])){
                                echo($_COOKIE['discord']);
                            }else{
                                echo ("введите ваш дискорд");
                                } 
                            ?>" name="discord">
                        </div>
                        <div class="profile__right_contacts-input-box">
                            <label for="text">Telegram</label>
                            <input type="text" id="profile__right_contacts-input" placeholder="<?php 
                            if(isset($_COOKIE['telegram'])){
                                echo($_COOKIE['telegram']);
                            }else{
                                echo ("введите ваш телеграм");
                                } 
                            ?>" name="telegram">
                        </div>
                        <div class="profile__right_contacts-input-box">
                            <label for="text">WhatsApp</label>
                            <input type="text" id="profile__right_contacts-input" placeholder="<?php 
                            if(isset($_COOKIE['whatsapp'])){
                                echo($_COOKIE['whatsapp']);
                            }else{
                                echo ("введите ваш ватсап");
                                } 
                            ?>" name="whatsapp">
                        </div>
                        <div class="profile__right_contacts-input-box">
                            <label for="text">Skype</label>
                            <input type="text" id="profile__right_contacts-input" placeholder="<?php 
                            if(isset($_COOKIE['skype'])){
                                echo($_COOKIE['skype']);
                            }else{
                                echo ("введите ваш скайп");
                                } 
                            ?>" name="skype">
                        </div>
                    </div>
                </div>
                <button type="submit" class="profile__right_btn">Сохранить изменения</button>
            </form>
        </section>
    </main>

    <script src="./js/main.js"></script>
</body>

</html>

<?php else:  header('Location: /PBT_shop_page/index.php');?>
<?php endif; ?>