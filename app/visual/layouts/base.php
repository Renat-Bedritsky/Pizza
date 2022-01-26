<?php $info = $_POST['info']; ?>

<?php
// echo '<pre>';
// print_r($_POST);
// echo '</pre';
if (isset($_POST['sauce-next'])) echo Message();
?>

<div class="products">
    <div class="products_wrapper">
        <div class="products_content">

            <?php if ($info['content'] == 'type') { ?>

                <div class="products_type">
                    <form method="POST" class="form">
                        <table>
                            <tr>
                                <td>
                                    <input class="input" type="radio" id="type1" name="type" value="Пепперони">
                                    <label class="label" for="type1">Пепперони</label>
                                </td>
                                <td>
                                    <span class="price">от 30 BYN</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="input" type="radio" id="type2" name="type" value="Деревенская">
                                    <label class="label" for="type2">Деревенская</label>
                                </td>
                                <td>
                                    <span class="price">от 30 BYN</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="input" type="radio" id="type3" name="type" value="Гавайская">
                                    <label class="label" for="type3">Гавайская</label>
                                </td>
                                <td>
                                    <span class="price">от 30 BYN</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="input" type="radio" id="type4" name="type" value="Грибная">
                                    <label class="label" for="type4">Грибная</label>
                                </td>
                                <td>
                                    <span class="price">от 30 BYN</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button name="type-next">Далее</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

            <?php } elseif ($info['content'] == 'size') { ?>

                <div class="products_size">
                    <form method="POST" class="form">
                        <table>
                            <tr>
                                <td>
                                    <input class="input" type="radio" id="size1" name="size" value="21">
                                    <label class="label" for="size1">21 см</label>
                                </td>
                                <td>
                                    <span class="price">30 BYN</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="input" type="radio" id="size2" name="size" value="26">
                                    <label class="label" for="size2">26 см</label>
                                </td>
                                <td>
                                    <span class="price">30 BYN</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="input" type="radio" id="size3" name="size" value="31">
                                    <label class="label" for="size3">31 см</label>
                                </td>
                                <td>
                                    <span class="price">30 BYN</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="input" type="radio" id="size4" name="size" value="45">
                                    <label class="label" for="size4">45 см</label>
                                </td>
                                <td>
                                    <span class="price">30 BYN</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button name="size-next">Далее</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

            <?php } elseif ($info['content'] == 'sauce') { ?>

                <div class="products_size">
                    <form method="POST" class="form">
                        <table>
                            <tr>
                                <td>
                                    <input class="input" type="radio" id="sauce1" name="sauce" value="Сырный">
                                    <label class="label" for="sauce1">Сырный</label>
                                </td>
                                <td>
                                    <span class="price">30 BYN</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="input" type="radio" id="sauce2" name="sauce" value="Кисло-сладкий">
                                    <label class="label" for="sauce2">Кисло-сладкий</label>
                                </td>
                                <td>
                                    <span class="price">30 BYN</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="input" type="radio" id="sauce3" name="sauce" value="Чесночный">
                                    <label class="label" for="sauce3">Чесночный</label>
                                </td>
                                <td>
                                    <span class="price">30 BYN</span>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input class="input" type="radio" id="sauce4" name="sauce" value="Барбекю">
                                    <label class="label" for="sauce4">Барбекю</label>
                                </td>
                                <td>
                                    <span class="price">30 BYN</span>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <button name="sauce-next">Заказ</button>
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>

            <?php } ?>

        </div>
    </div>
</div>