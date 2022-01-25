<?php $info = $_POST['info']; ?>

<style>
    .products_content div form {
        width: 380px;
        margin: auto;
        text-align: center;
        padding-top: 10px;
    }
    
    .products_content div form button {
        font-size: 32px;
        padding: 5px 0;
        width: 100%;
        border: 0;
        background-color: white;
        cursor: pointer;
    }
    
    .products_content div form button:hover {
        background-color: rgb(255, 205, 65);
    }
</style>

<div class="products">
    <div class="products_wrapper">
        <div class="products_content">

            <?php if ($info['content'] == 'type') { ?>

                <div class="products_type">
                    <form method="POST">
                        <button name="type" value="Пепперони">Пепперони</button> <br>
                        <button name="type" value="Деревенская">Деревенская</button><br>
                        <button name="type" value="Гавайская">Гавайская</button><br>
                        <button name="type" value="Грибная">Грибная</button><br>
                    </form>
                </div>

            <?php } elseif ($info['content'] == 'size') { ?>

                <div class="products_size">
                    <form method="POST">
                        <button name="size" value="21">21 см</button> <br>
                        <button name="size" value="26">26 см</button><br>
                        <button name="size" value="31">31 см</button><br>
                        <button name="size" value="45">45 см</button><br>
                    </form>
                </div>

            <?php } elseif ($info['content'] == 'sauce') { ?>

                <div class="products_sauce">
                    <form method="POST">
                        <button name="sauce" value="Сырный">Сырный</button> <br>
                        <button name="sauce" value="Кисло-сладкий">Кисло-сладкий</button><br>
                        <button name="sauce" value="Чесночный">Чесночный</button><br>
                        <button name="sauce" value="Барбекю">Барбекю</button><br>
                    </form>
                </div>

            <?php } ?>

        </div>
    </div>
</div>