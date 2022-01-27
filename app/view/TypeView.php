<?php require_once 'app/core/View.php';

class TypeView extends View {

    function __construct() {
        $this->layout = 'type';
        parent::__construct($this->template = 'default' ,$this->layout);
    }
}