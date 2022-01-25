<?php

// Сообщение о принятии заказа
function Message() {
    return '
    <style>.order_enter {display: block;}</style>
    <div class="order_enter">
        <div class="order_enter_window">
            <h2>Ваш заказ принят</h2>
            <p>Ожидайте приготовления заказа</p>
        </div>
    </div>';
}