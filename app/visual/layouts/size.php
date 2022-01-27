<?php $info = $_POST['info']; ?>

<div class="products">
    <div class="products_wrapper">
        <div class="products_content">
            <form method="POST" class="form">
                <table>

                    <?php foreach ($info['size'] as $size => $price) { ?>

                        <tr>
                            <td>
                                <input class="input" type="radio" id="size<?= $size ?>" name="size" value="<?= $size ?>">
                                <label class="label" for="size<?= $size ?>"><?= $size ?> см</label>
                            </td>
                            <td>
                                <span class="price"><?= $price ?> BYN</span>
                            </td>
                        </tr>

                    <?php } ?>

                    <tr>
                        <td>
                            <button name="size-prev">Назад</button>
                        </td>
                        <td>
                            <button name="size-next">Далее</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>