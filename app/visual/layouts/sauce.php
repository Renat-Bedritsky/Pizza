<?php $info = $_POST['info']; ?>

<div class="products">
    <div class="products_wrapper">
        <div class="products_content">
            <form method="POST" class="form">
                <table>

                    <?php foreach ($info['add'] as $sauce) { ?>

                        <tr>
                            <td>
                                <input class="input" type="radio" id="sauce<?= $sauce['id'] ?>" name="sauce" value="<?= $sauce['name'] ?>">
                                <label class="label" for="sauce<?= $sauce['id'] ?>"><?= $sauce['name'] ?></label>
                            </td>
                            <td>
                                <span class="price"><?= $sauce['price'] ?> BYN</span>
                            </td>
                        </tr>

                    <?php } ?>

                    <tr>
                        <td>
                            <button name="sauce-prev">Назад</button>
                        </td>
                        <td>
                            <button name="sauce-next">Далее</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>