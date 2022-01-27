<style>
    .watch {
        position: absolute;
        margin-top: -172px;
        width: 100vw;
        height: 100vh;
        background-color: rgba(40, 40, 40, .5);
    }

    .watch_wrapper {
        padding-top: 30px;
        background-color: white;
        margin: 200px auto;
        width: 600px;
        height: 250px;
        font-size: 28px;
    }

    .watch_wrapper table tr td {
        width: 300px;
        padding-top: 10px;
    }

    .watch_wrapper table tr td:nth-child(1) {
        padding-left: 30px;
    }

    .watch_wrapper table tr td:nth-child(2) {
        text-align: right;
        padding-right: 30px;
    }

    .submit {
        height: 100px;
    }
    
    .order_button {
        font-size: 28px;
        padding: 5px 0;
        width: 130px;
        border: 2px solid white;
        background-color: white;
        cursor: pointer;
        border-radius: 180px;
    }
    
    .order_button:hover {
        border: 2px solid rgb(255, 205, 65);
    }
</style>

<?php
if (isset($_POST['order_complet'])) echo message();
?>

<div class="watch">
    <div class="watch_wrapper">
        <table>
            <tr>
                <td><?= $_COOKIE['type'] ?> <?= $_COOKIE['size'] ?> см</td>
                <td><?= $_POST['info']['pizza'] ?> BYN</td>
            </tr>
            <tr>
                <td><?= $_COOKIE['sauce'] ?></td>
                <td><?= $_POST['info']['sauce'] ?> BYN</td>
            </tr>
            <tr>
                <td>Итого:</td>
                <td><?= $_POST['info']['total'] ?> BYN</td>
            </tr>
            <tr class="submit">
                <td>
                    <form method="POST">
                        <button class="order_button" name="order_cancel">Отмена</button>
                    </form>
                </td>
                <td>
                    <form method="POST">
                        <button class="order_button" name="order_complet">Заказ</button>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>