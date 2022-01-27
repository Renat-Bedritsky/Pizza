<?php
if (isset($_POST['order_complet'])) {
    echo message();
}
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