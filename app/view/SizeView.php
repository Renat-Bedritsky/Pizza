<?php require_once 'app/core/View.php';

class SizeView extends View {

    function __construct() {
        $this->layout = 'size';
        parent::__construct($this->template = 'default' ,$this->layout);
    }
}