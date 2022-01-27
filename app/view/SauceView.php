<?php require_once 'app/core/View.php';

class SauceView extends View {

    function __construct() {
        $this->layout = 'sauce';
        parent::__construct($this->template = 'default' ,$this->layout);
    }
}