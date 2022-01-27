<?php require_once 'app/core/Model.php';

class ProductsModel extends Model {

    function __construct() {
        parent::__construct();
        $this->tablename = 'products';
    }

    function selectPizza() {
        $pizza = [];
        $count = $this->selectList(['id']);

        foreach ($count as $value) {
            $id = $value['id'];
            $type = $this->selectList(['id, name, size_21'], ['id' => $id]);
            $type = $type[0];

            $pizza += [$id => $type];
        }

        return $pizza;
    }

    function selectSize($type) {
        $size = $this->selectList(['size_21, size_26, size_31, size_45'], ['name' => $type]);
        $size = $size[0];

        $size += ['21' => $size['size_21']];
        $size += ['26' => $size['size_26']];
        $size += ['31' => $size['size_31']];
        $size += ['45' => $size['size_45']];

        unset($size['size_21']);
        unset($size['size_26']);
        unset($size['size_31']);
        unset($size['size_45']);

        return $size;
    }

    function pricePizza($type, $size) {
        $size = 'size_'.$size;
        $price = $this->selectList([$size], ['name' => $type]);
        return $price[0][$size];
    }

}