<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Заказать</title>
    <link rel="shortcut icon" href="/app/public/images/site-images/images.jpg" type="image/png">
    <link rel="stylesheet" href="/app/public/css/style9.css">
    <link rel="stylesheet" href="/app/public/css/media.css">
    <?= $_POST['info']['style']; ?>
</head>

<body>

<div class="window">
    <div class="window_wrapper">
        <div class="header">
            <div class="header_wrapper width">
                <div>
                    <img src="/app/public/images/site-images/pizza.png" class="header_logo" alt="logo">
                </div>
            </div>
        </div>

        <div class="nav width">
            <form method="POST">
                <button class="button button_type" name="table" value="type">Тип</button>
                <button class="button button_size" name="table" value="size">Размер</button>
                <button class="button button_sauce" name="table" value="sauce">Соус</button>
            </form>
        </div>