<?php require_once 'app/core/Model.php';

class OrdersModel extends Model {

    function __construct() {
        parent::__construct();
        $this->tablename = 'orders';
    }

    function addOrder($type, $size, $sauce, $price) {
        date_default_timezone_set('Europe/Minsk');
        $line = $this->getLine();

        $id = $line + 1;
        $created_at = date("Y-m-d H:i:s");

        $this->insertList([$id, $type, $size, $sauce, $price, $created_at]);
    }

}