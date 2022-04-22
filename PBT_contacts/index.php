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

    <main class="contacts__body">
        <section class="contacts__box">
            <h1 class="contacts__h1">КОНТАКТНАЯ ИНФОРМАЦИЯ</h1>
            <div class="contacts__links_box">
                <a href="#" class="contacts__links_blocks">
                    <div class="contacts__links_circle"></div>
                    <div class="contacts__links_text">Discord</div>
                </a>
                <a href="#" class="contacts__links_blocks contacts__links_blocks2">
                    <div class="contacts__links_circle"></div>
                    <div class="contacts__links_text">VK</div>
                </a>
                <a href="#" class="contacts__links_blocks contacts__links_blocks3">
                    <div class="contacts__links_circle"></div>
                    <div class="contacts__links_text">Youtube</div>
                </a>
                <a href="#" class="contacts__links_blocks contacts__links_blocks4">
                    <div class="contacts__links_circle"></div>
                    <div class="contacts__links_text">Facebook</div>
                </a>
                <a href="#" class="contacts__links_blocks contacts__links_blocks5">
                    <div class="contacts__links_circle"></div>
                    <div class="contacts__links_text">Telegram</div>
                </a>
                <a href="#" class="contacts__links_blocks contacts__links_blocks6">
                    <div class="contacts__links_circle"></div>
                    <div class="contacts__links_text">WhatsApp</div>
                </a>
            </div>
        </section>
    </main>

    <script src="./js/main.js"></script>
</body>

</html>