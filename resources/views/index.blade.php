<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
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
    <div class="content">
        <div class="description">
            <h1 id="description-title">Чисто зелений бренд</h1>
            <h3 id="description-title-2">Очищення на всіх рівнях</h3>

            <div class="card-goods-description">
                <div class="card">
                    <img src="images/capsula.jpg" alt="Капсула порошка">
                    <p id="card-text">
                        Для дому
                    </p>
                </div>
                <div class="card">
                    <img src="images/capsula.jpg" alt="Капсула порошка">
                    <p id="card-text">
                        Для прибирання
                    </p>
                </div>
                <div class="card">
                    <img src="images/capsula.jpg" alt="Капсула порошка">
                    <p id="card-text">
                        Для прання
                    </p>
                </div>
            </div>
            <p id="description-goods">Натуральні засоби для догляду за оселею, що не містять жодних синтетичних компонентів, шкідливих для здоров’я та навколишнього середовища.</p>
            <p id="btn-catalog"><a id="a-none" href="/catalog">До каталогу</a></p>
        </div>
        <div class="goods-categori">
            <p id="categori-goods-title">Категорії товарів: </p>
            <div class="categori-goods">
                <div class="goods-clean">
                    <img id="ph" src="images/goods1.jpg" alt="фото засобу для прання">
                    <p>
                        Засоби для <br><span id="goods-categori-name">ПРАННЯ</span>
                    </p>
                    <a id="color-a" href="/catalog/1"><p id="btn-goods">Переглянути товари</p></a>
                </div>
                <div class="goods-clean">
                    <img id="ph" src="images/goods2.jpg" alt="фото засобу для прання">
                    <p>
                        Засоби для <br><span id="goods-categori-name">МИТТЯ ПОСУДУ</span>
                    </p>
                    <a id="color-a" href="/catalog/2"><p id="btn-goods">Переглянути товари</p></a>
                </div>
                <div class="goods-clean">
                    <img id="ph" src="images/goods3.jpg" alt="фото засобу для прання">
                    <p>
                        Засоби для <br><span id="goods-categori-name">ПРИБИРАННЯ</span>
                    </p>
                    <a id="color-a" href="/catalog/3"><p id="btn-goods">Переглянути товари</p></a>
                </div>
                <div class="goods-clean">
                    <img id="ph" src="images/goods4.jpg" alt="фото засобу для прання">
                    <p>
                        Догляд за<br><span id="goods-categori-name">ДОМОМ</span>
                    </p>
                    <a id="color-a" href="/catalog/4"><p id="btn-goods">Переглянути товари</p></a>
                </div>
            </div>
        </div>
        <div class="out-unix">
            <div class="text-out-unix">
                <h2 id="text-out-unix-1">
                    Наша унікальність:
                </h2>
                <p id="text-out-unix-2">
                    У складі всіх засобів ТМ Green Max ми використовуємо інгредієнти виключно рослинного та мінерального походження, які не шкодять навколишньому середовищу та здоров'ю людини.
                </p>
            </div>
            <div class="photo-our-unix">
                <div class="ph-ou-ui">
                    <img id="phot" src="images/our1.jpg" alt="Фото руки з якої росте листок">
                    <p id="ph-ou-ui">
                        Виключно натуральні компоненти
                    </p>
                </div>
                <div class="ph-ou-ui">
                    <img id="phot" src="images/our2.jpg" alt="Фото руки з якої росте листок">
                    <p id="ph-ou-ui">
                        Абсолютно безпечний склад усіх засобів
                    </p>
                </div>
                <div class="ph-ou-ui">
                    <img id="phot" src="images/our3.jpg" alt="Фото руки з якої росте листок">
                    <p id="ph-ou-ui">
                        Концентрована ефективна формула
                    </p>
                </div>
            </div>
        </div>
        <div class="out-unix">
            <div class="text-out-unix">
                <h2 id="text-out-unix-1">
                    Сучасне виробництво:
                </h2>
                <p id="text-out-unix-2">
                    Для того, щоб контролювати якість та безпечність нашої продукції, ми збудували власне виробництво з дотриманням всіх стандартів GMP.
                </p>
            </div>
            <div class="photo-our-uni">
                <div class="wrap5">
                    <div class="fotorama">
                        <img src="images/production1.jpg">
                        <img src="images/production2.jpg">
                        <img src="images/production3.jpg">
                        <img src="images/production4.jpg">
                    </div>
                </div>
            </div>
        </div>
        <div class="care">
            <div class="care-photo">
                <img id="care-photo" src="images/bulb.jpg" alt="фото Капсули">
            </div>
            <div class="care-text">
                <h2 id="care-text-1">
                    Турбота про здоров'я власної родини та здоров’я навколишнього середовища об'єднує багато людей з усього світу.
                </h2>
                <p id="care-text-2">
                    Для нас є важливим створення безпечного натурального продукту, який є максимально ефективним. Піклуватися про рідних та близьких, любити все живе довкілля легко з продуктами Green Max
                </p>
                <h2 id="care-text-1">
                    Ми за екожиття! <span id="care-text-3">Приєднуйся!</span>
                </h2>
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
