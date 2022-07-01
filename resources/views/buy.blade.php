<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <title>Green Max | Догляд за оселею</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/media.css">
    <link rel="icon" sizes="192x192" href="https://static.wixstatic.com/media/815f02_e88b006f2b9145ebb5b59fb3cfae5958%7Emv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/815f02_e88b006f2b9145ebb5b59fb3cfae5958%7Emv2.png">
</head>
<body>
<div class="wrap">
    @include('partials.header')
    <div class="content-our">
        <h2 id="our-text">
            Як придбати нашу продукцію
        </h2>
        <div class="our-text-ph">
            <div class="our-text">
                <p id="text">
                    Як придбати нашу продукцію
                    Компанія CHOICE розповсюджує свою продукцію через мережу Партнерів в всіх регіонах
                    України<br>
                    <a id="s-phone" href="tel: +38099999">Зателефонувати</a>

                </p>
            </div>
            <div class="our-ph">
                <img id="ph-buy" src="images/buy.jpg" alt="Фото лікарів">
            </div>
        </div>
    </div>
    @include('partials.footer')
</div>

<!-- підключення слайдера-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
<script src="js/script.js"></script>
</body>
</html>
