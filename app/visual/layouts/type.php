<?php $info = $_POST['info']; ?>

<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre';
?>

<div class="products">
    <div class="products_wrapper">
        <div class="products_content">
            <form method="POST" class="form">
                <table>

                    <?php foreach ($info['pizza'] as $pizza) { ?>

                        <tr>
                            <td>
                                <input class="input" type="radio" id="type<?= $pizza['id'] ?>" name="type" value="<?= $pizza['name'] ?>">
                                <label class="label" for="type<?= $pizza['id'] ?>"><?= $pizza['name'] ?></label>
                            </td>
                            <td>
                                <span class="price">от <?= $pizza['size_21'] ?> BYN</span>
                            </td>
                        </tr>

                    <?php } ?>

                    <tr>
                        <td></td>
                        <td>
                            <button name="type-next">Далее</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>