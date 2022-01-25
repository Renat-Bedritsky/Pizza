<?php
require_once 'app/models/OrdersModel.php';

class Controller {
    public $orders;

    function __construct() {
        // code
    }

    public static function set404(){
        include_once 'app/core/View.php';
        (new View('other'))->show();
    }
}