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
    <p id="bbt"><a id="" href="/catalog">Повернутися в каталог</a></p>
    <form action="/add_product" method="post" enctype="multipart/form-data">
        @csrf
        <div class="good">
            <div class="photo-title">
                <img src="images/goods1.jpg" alt="Фото товару">
            </div>
            <div class="goods-opus">
                <label>Виберіть фото товару</label>
                <input type="file" name="image">
            </div>
            <div class="goods-opus">
                <input type="text" name="title" class="product_input" placeholder="Введіть назву" required>
            </div>
            <div class="goods-op">
                <textarea name="description" placeholder="Введіть опис" class="textarea_product" required></textarea>
            </div>
            <div class="price">
                <input type="text" name="price" class="product_input" placeholder="Введіть ціну" required>
            </div>
            <div class="category">
                <select name="category_id">
                    @foreach($categories as $key => $category)
                        <option value="{{ $key }}">{{ $category }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="product_add_button">Додати товар</button>
        </div>
    </form>
</div>
</body>
</html>
