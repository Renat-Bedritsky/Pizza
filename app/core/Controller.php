<?php
require_once 'app/models/OrdersModel.php';
require_once 'app/models/ProductsModel.php';
require_once 'app/models/SauceModel.php';

class Controller {
    public $orders, $products, $sauce;

    function __construct() {
        // code
    }

    public static function set404(){
        include_once 'app/core/View.php';
        (new View('other'))->show();
    }
}