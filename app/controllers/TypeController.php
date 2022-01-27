<?php 
require_once 'app/core/Controller.php';
require_once 'app/view/TypeView.php';

class TypeController extends Controller {

    function __construct() {
        $this->view = new TypeView;
        $this->products = new ProductsModel;
    }

    function actionGet() {
        $_POST['info'] = [];

        if (isset($_POST['type'])) {
            setcookie('type', $_POST['type']);
            header('location: /size');
        }
        
        $_POST['info'] += ['style' => "<style>.button_type {background-color: rgb(255, 205, 65);}</style>"];

        $pizza = $this->products->selectPizza();
        $_POST['info'] += ['pizza' => $pizza];
        
        $this->view->show();
    }
}