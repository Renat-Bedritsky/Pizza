<?php require_once 'app/core/Model.php';

class SauceModel extends Model {

    function __construct() {
        parent::__construct();
        $this->tablename = 'sauce';
    }

    function priceSauce($name) {
        $price = $this->selectList(['price'], ['name' => $name]);
        return $price[0]['price'];
    }

}