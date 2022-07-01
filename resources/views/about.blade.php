<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <title>Green Max | Догляд за оселею</title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="icon" sizes="192x192" href="https://static.wixstatic.com/media/815f02_e88b006f2b9145ebb5b59fb3cfae5958%7Emv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/815f02_e88b006f2b9145ebb5b59fb3cfae5958%7Emv2.png">
</head>
<body>
<div class="wrap">
    @include('partials.header')
    <div class="content-our">
        <h2 id="our-text">
            ПРО НАС
        </h2>
        <div class="our-text-ph">
            <div class="our-text">
                <p id="text">
                    "Green max" - торгова марка натуральних засобів для догляду за оселею, створена в 2017 році, і входить в портфель брендів компанії СHOICE. Компанія CHOICE за 15 років є одним з провідних представників на українському ринку натуральних продуктів
                    Всі засоби Green Max зроблені за сучасними рецептурами та повністю відповідають європейським вимогам до екозасобів. У складі використовуються виключно натуральні і безпечні компоненти рослинного і мінерального походження, рослинні ПАВ, одержані з цукру і рослинного масла, безпечні для організму людини і не завдають шкоди навколишньому середовищу.
                    Маючи власне виробництво, створене за стандартами GMP, ми гарантуємо повний контроль якості сировини і продукції, що випускається.
                    Асортимент Green Max постійно зростає, поповнюючись новими продуктами.
                    Купуючи продукти Green Max ви приєднаєтеся до великої місії Компанії «Зберегти чистоту і здоров'я планети»!
                </p>
            </div>
            <div class="our-ph">
                <img src="images/ourph.jpg" alt="Фото лікарів">
                <img id="pht" src="images/ourph.jpg" alt="Фото лікарів">
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
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
